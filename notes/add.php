<?php 
	include("../public/top.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Personal Notes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../public/styles/header.css">
	<link rel="stylesheet" href="../public/styles/footer.css">
	<link rel="stylesheet" href="styles/add.css">
</head>
<body>
	<?php
		include '../public/header.php';
	?>


	<section class="add-note-container">
		<section class="form-container">
			<form method="post">
				<input type="text" class="inp" placeholder="Title of note">
				<textarea class="inp" placeholder="Note"></textarea>
				<input type="text" class="inp" placeholder="Tags of note">
				<button type="submit" class="btn">Add Note</button>
			</form>
		</section>
	</section>


	<?php
		include '../public/footer.php';
	?>

</body>
</html>