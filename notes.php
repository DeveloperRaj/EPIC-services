<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/notes.css">
</head>
<body>
	<section id="loader">
		Loading...
	</section>

	<section id="notesContainer">

		<?php
			include 'public/header.php';
		?>

		<section class="notes-container-main">
			
		</section>

		<?php 
			include 'public/footer.php';
		?>

	</section>

	<script>
		window.onload = function(){
			loader.style.display = "none";
			notesContainer.style.display = "block";
		}
	</script>
</body>
</html>