<?php 
	include("../public/top.php");
	require '../database/conn.php';
	require '../database/sessmanage.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Stories</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/add.css">
	<script type="text/javascript" src="../assets/jquery.js"></script>
</head>
<body>
	<?php 

		if (!isset($_GET['storyid'])) {
			echo "<script>window.location.href='index.php'</script>";
		} else {
			$selectstoryedit = "select * from stories where storyid =".$_GET['storyid'];
			$res = mysqli_query($conn, $selectstoryedit);
			$checkData = mysqli_num_rows($res);
			if ($checkData == 1){
				$row = mysqli_fetch_array($res);
				$storyuser = $row['storyuser'];
				$storytitle = $row['storytitle'];
				$storydata = $row['storydata'];
				$storytags = $row['storytags'];
			} else {
				echo "<script>window.location.href='index.php'</script>";
			}
		}

	?>
	<?php
		if (isset($_SESSION['user']) && $_SESSION['user'] === $storyuser){
		include '../public/header.php';
	?>


	<section class="add-story-container">
		<section class="form-container">
			<form method="post">
				<input type="text" class="inp" placeholder="Title of Story" name="nstl" value="<?= $storytitle ?>">
				<textarea class="inp" placeholder="Story" name="nsdt"><?= $storydata ?></textarea>
				<input type="text" class="inp" placeholder="Tags of Story" name="nstg" value="<?= $storytags ?>">
				<button type="submit" class="btn" name="sbmtedit">Save changes</button>
			</form>
		</section>
	</section>


	<?php
			include '../public/footer.php';
		} else {
			echo "<script>window.location.href='../account/signin.php'</script>";
		}
	?>

	<script type="text/javascript">
		$(document).ready(function(){

			$("input[data-usage='ntags']").on("input", function(){

				$(this).val($.trim($(this).val()));

			});

		});
	</script>

</body>
</html>
<?php 

	function replace_character($str){
		$temp = str_split($str);
		for($r = 0; $r < count($temp); $r++) {
			if ($temp[$r] == "<") {
				$temp[$r] = "&lt;";
			} 
			if ($temp[$r] == ">") {
				$temp[$r] = "&gt;";
			}
		}
		return implode("", $temp);
	}

	if (isset($_POST['sbmtedit'])){

		$newTitle = $_POST['nstl'];
		$newData = $_POST['nsdt'];
		$newTags = trim($_POST['nstg']);

		if (!empty($newTitle) && !empty($newData) && !empty($newTags)) {

			$storyid = $_GET['storyid'];
			$newTitle = replace_character($newTitle);
			$newData = replace_character($newData);
			$newTags = replace_character($newTags);
			$newTitle = mysqli_real_escape_string($conn, $newTitle);
			$newData = mysqli_real_escape_string($conn, $newData);
			$newTags = mysqli_real_escape_string($conn, $newTags);

			$updatestoryquery = "update stories set storytitle = '$newTitle', storydata = '$newData', storytags = '$newTags' where storyid = '$storyid'";
			if ($res = mysqli_query($conn, $updatestoryquery)){
				// header("location: index.php");
				echo "<script>alert('Story edited successfully');</script>";
				echo "<script>window.location.href='index.php'</script>";
			} else {
				echo mysqli_error($conn);
			}

		} else {
			echo "<script>alert('any field can not be empty');</script>";
		}

	}

?>