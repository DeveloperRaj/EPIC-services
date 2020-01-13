<?php 
	include("../public/top.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Stories</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/add.css">
</head>
<body>
	<?php
		include '../public/header.php';
	?>


	<section class="add-story-container">
		<section class="form-container">
			<form method="post">
				<input type="text" class="inp" placeholder="Title of Story">
				<textarea class="inp" placeholder="Story"></textarea>
				<input type="text" class="inp" placeholder="Tags of Story">
				<button type="submit" class="btn">Add Story</button>
			</form>
		</section>
	</section>


	<?php
		include '../public/footer.php';
	?>

</body>
</html>