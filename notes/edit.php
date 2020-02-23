<?php 
	include("../public/top.php");
	require '../database/conn.php';
	require '../database/sessmanage.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Personal Notes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/add.css">
	<script type="text/javascript" src="../assets/jquery.js"></script>
</head>
<body>
	<?php
		if (!isset($_SESSION['user'])){
			echo "<script>window.location.href='../accout/signin.php'</script>";
		} else {
		include '../public/header.php';
	?>


	<section class="add-note-container">
		<section class="form-container">
			<?php 

				if (!isset($_GET['noteid'])) {
					echo "<script>window.location.href='index.php'</script>";
				} else {
					$selectnoteedit = "select * from notes where noteid =".$_GET['noteid'];
					$res = mysqli_query($conn, $selectnoteedit);
					$checkData = mysqli_num_rows($res);
					if ($checkData == 1){
						$row = mysqli_fetch_array($res);
						$notetitle = $row['notetitle'];
						$notedata = $row['notedata'];
						$notetags = $row['notetags'];
					} else {
						echo "<script>window.location.href='index.php'</script>";
					}
				}

			?>
			<form method="post">
				<input type="text" name="edittitle" class="inp" placeholder="Title of note" value="<?= $notetitle ?>">

				<textarea class="inp" name="editdata" placeholder="Note"><?= $notedata ?>
				</textarea>

				<input type="text" name="edittags" class="inp" placeholder="Tags of note" data-usage="ntags" value="<?= $notetags ?>">
				
				<button type="submit" class="btn" name="smbtedit">
					Save Changes
				</button>
			</form>
		</section>
	</section>


	<?php
		include '../public/footer.php';
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

	if (isset($_POST['smbtedit'])){

		$newTitle = $_POST['edittitle'];
		$newData = $_POST['editdata'];
		$newTags = trim($_POST['edittags']);

		if (!empty($newTitle) && !empty($newData) && !empty($newTags)) {

			$noteid = $_GET['noteid'];
			$newTitle = replace_character($newTitle);
			$newData = replace_character($newData);
			$newTags = replace_character($newTags);
			$newTitle = mysqli_real_escape_string($conn, $newTitle);
			$newData = mysqli_real_escape_string($conn, $newData);
			$newTags = mysqli_real_escape_string($conn, $newTags);

			$updatenotequery = "update notes set notetitle = '$newTitle', notedata = '$newData', notetags = '$newTags' where noteid = '$noteid'";
			if ($res = mysqli_query($conn, $updatenotequery)){
				// header("location: index.php");
				echo "<script>alert('note edited successfully');</script>";
				echo "<script>window.location.href='index.php'</script>";
			} else {
				echo mysqli_error($conn);
			}

		} else {
			echo "<script>alert('any field can not be empty');</script>";
		}

	}

?>