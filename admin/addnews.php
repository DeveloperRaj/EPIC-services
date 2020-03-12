<?php 
	require '../database/conn.php';
	require '../database/sessmanage.php';

	if (!isset($_SESSION['user'])) {
		echo "<script>window.location.href='../'</script>";
	} else {
		if ($_SESSION['user'] !== "admin") {
			echo "<script>window.location.href='../'</script>";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/addnews.css">
	<link rel="stylesheet" href="styles/loader.css">
	<script src="../assets/jquery.js"></script>
</head>
<body>
	<section id="loader">Loading...</section>

	<section id="main">
		<?php include 'header.php'; ?>
		<section class="admin-container">
			<?php 
				include 'sidebar.php';
			?>
			<section class="main-pannel">
				<section class="pannel-header">Add NEWS</section>
				<form method="post" enctype="multipart/form-data">
					<input type="text" class="inp" placeholder="Title" name="newstitle">

					<textarea class="inp" placeholder="News" name="newsdata"></textarea>

					<input type="text" class="inp" placeholder="Tags seprated by comma(,)" name="newstags" data-usage="stags">

					<div class="thumbnail-uploader">
						<label>NEWS thumbnail image: </label><input type="file" name="newsthumbnail">
					</div>

					<button type="submit" class="btn" name="newssubmit">
						Add NEWS
					</button>
				</form>
			</section>
		</section>
	</section>

	<script type="text/javascript">

		$(document).ready(function(){
			$("input[data-usage='stags']").on("input", function(){
				$(this).val($.trim($(this).val()));
			});
		});
		
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			loader.style.display = "none";
			main.style.display = "block";
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
	
	if (isset($_POST['newssubmit'])) {

		$title = $_POST['newstitle'];
		$news = $_POST['newsdata'];
		$tags = trim($_POST['newstags']);
		$thumbnail = $_FILES['newsthumbnail']['name'];

		$file_extension = pathinfo($thumbnail, PATHINFO_EXTENSION);
		$allowed_image_extension = array("png", "jpg", "jpeg");

		if (!empty($title) && !empty($news) && !empty($tags) && !empty($thumbnail)) {

			if (file_exists($_FILES['newsthumbnail']['tmp_name'])){

				if(in_array($file_extension, $allowed_image_extension)){

					$title = replace_character($title);
					$news = replace_character($news);
					$tags = replace_character($tags);
					$title = mysqli_real_escape_string($conn, $title);
					$news = mysqli_real_escape_string($conn, $news);
					$tags = mysqli_real_escape_string($conn, $tags);

					$target = "../news/thumbnails/" . basename($thumbnail);

					if (move_uploaded_file($_FILES["newsthumbnail"]["tmp_name"], $target)) {
			  			$insertinnewsquery = "INSERT INTO news(newstitle, newsdata, newstags, thumbnail, dttm) VALUES ('$title', '$news', '$tags', '$thumbnail', now())";
						
						if ($res = mysqli_query($conn, $insertinnewsquery)){
							echo "<script>window.location.href='managenews.php'</script>";
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