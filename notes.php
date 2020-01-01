<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Personal Notes</title>
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
			<section class="notes-options">
				<section class="search-notes">
					<form method="get" action="">
						<input type="text" name="searchNote" placeholder="Search Notes From Here">
						<button type="submit" name="searchNoteBtn">Search</button>
					</form>
				</section>
				<a href="#" class="add-new">
					Add New Note
				</a>
			</section>
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