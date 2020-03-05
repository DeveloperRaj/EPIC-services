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
				<section class="pannel-header">Edit NEWS</section>
				<form method="post" enctype="multipart/form-data">
					<input type="text" class="inp" placeholder="Title" name="sttl">

					<textarea class="inp" placeholder="News" name="sdata"></textarea>

					<input type="text" class="inp" placeholder="Tags seprated by comma(,)" name="stags" data-usage="stags">

					<div class="thumbnail-uploader">
						<label>NEWS thumbnail image: </label><input type="file" name="image">
					</div>

					<button type="submit" class="btn" name="ssubmit">
						Save Changes
					</button>
				</form>
			</section>
		</section>
	</section>

	<script type="text/javascript">
		$(document).ready(function(){
			loader.style.display = "none";
			main.style.display = "block";
		});
	</script>
</body>
</html>