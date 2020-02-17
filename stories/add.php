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
		if (!isset($_SESSION['user'])){
			header("location: ../account/signin.php");
		} else {
		include '../public/header.php';
	?>


	<section class="add-story-container">
		<section class="form-container">
			<form method="post">
				<input type="text" class="inp" placeholder="Title of story" name="sttl">

				<textarea class="inp" placeholder="Story" name="sdata"></textarea>

				<input type="text" class="inp" placeholder="Tags of stories seprated by comma(,)" name="stags" data-usage="stags">

				<button type="submit" class="btn" name="ssubmit">
					Add story
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

			$("input[data-usage='stags']").on("input", function(){

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
	
	if (isset($_POST['ssubmit'])) {

		$title = $_POST['sttl'];
		$story = $_POST['sdata'];
		$tags = trim($_POST['stags']);

		if (!empty($title) && !empty($story) && !empty($tags)) {

			$title = replace_character($title);
			$story = replace_character($story);
			$tags = replace_character($tags);
			$storyuser = $_SESSION['user'];
			$title = mysqli_real_escape_string($conn, $title);
			$story = mysqli_real_escape_string($conn, $story);
			$tags = mysqli_real_escape_string($conn, $tags);
			$insertinstoriesquery = "INSERT INTO stories(storyuser, storytitle, storydata, storytags, dttm) VALUES ('$storyuser', '$title', '$story', '$tags', now())";
				
			if ($res = mysqli_query($conn, $insertinstoriesquery)){
				// header("location: index.php");
				echo "<script>window.location.href='index.php'</script>";
			} else {
				echo mysqli_error($conn);
			}

		} else {
			echo "<script>alert('please fill in all fields')</script>";
		}

	}

?>