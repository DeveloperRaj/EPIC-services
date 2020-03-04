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
			<form method="post" enctype="multipart/form-data">
				<input type="text" class="inp" placeholder="Title" name="sttl">

				<textarea class="inp" placeholder="Writeup" name="sdata"></textarea>

				<input type="text" class="inp" placeholder="Tags seprated by comma(,)" name="stags" data-usage="stags">

				<div class="thumbnail-uploader">
					<label>Writeup thumbnail image: </label><input type="file" name="image">
				</div>

				<button type="submit" class="btn" name="ssubmit">
					Add Writeup
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
		$thumbnail = $_FILES['image']['name'];

		$file_extension = pathinfo($thumbnail, PATHINFO_EXTENSION);
		$allowed_image_extension = array("png", "jpg", "jpeg");

		if (!empty($title) && !empty($story) && !empty($tags) && !empty($thumbnail)) {

			if (file_exists($_FILES['image']['tmp_name'])){

				if(in_array($file_extension, $allowed_image_extension)){

					$title = replace_character($title);
					$story = replace_character($story);
					$tags = replace_character($tags);
					$storyuser = $_SESSION['user'];
					$title = mysqli_real_escape_string($conn, $title);
					$story = mysqli_real_escape_string($conn, $story);
					$tags = mysqli_real_escape_string($conn, $tags);

					$target = "thumbnails/" . basename($thumbnail);

					if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
			  			$insertinstoriesquery = "INSERT INTO stories(storyuser, storytitle, storydata, storytags, thumbnail, dttm) VALUES ('$storyuser', '$title', '$story', '$tags', '$thumbnail', now())";
						
						if ($res = mysqli_query($conn, $insertinstoriesquery)){
							// header("location: index.php");
							echo "<script>window.location.href='index.php'</script>";
						} else {
							echo mysqli_error($conn);
						}   
			        }

					echo $thumbnail;
				} else {
					echo "<script>alert('Only image files allowed(.png, .jpeg)')</script>";
				}
			} else {
				echo "<script>alert('choose image file to upload')</script>";
			}

		} else {
			echo "<script>alert('please fill in all fields')</script>";
		}

	}

?>