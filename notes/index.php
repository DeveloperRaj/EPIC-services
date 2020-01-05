<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Personal Notes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/notes.css">
</head>
<body>
	<section id="loader">
		Loading...
	</section>

	<section id="notesContainer">

		<?php
			include '../public/header.php';
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
			<section class="nt-container">
				<section class="note">
					<a href="#" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="#">Open</a>
						<a href="#">Edit</a>
						<a href="#">Delete</a>
					</section>
				</section>
				<section class="note">
					<a href="#" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="#">Open</a>
						<a href="#">Edit</a>
						<a href="#">Delete</a>
					</section>
				</section>
				<section class="note">
					<a href="#" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="#">Open</a>
						<a href="#">Edit</a>
						<a href="#">Delete</a>
					</section>
				</section>
				<section class="note">
					<a href="#" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="#">Open</a>
						<a href="#">Edit</a>
						<a href="#">Delete</a>
					</section>
				</section>
				<section class="note">
					<a href="#" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="#">Open</a>
						<a href="#">Edit</a>
						<a href="#">Delete</a>
					</section>
				</section>
				<section class="note">
					<a href="#" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="#">Open</a>
						<a href="#">Edit</a>
						<a href="#">Delete</a>
					</section>
				</section>
				<section class="note">
					<a href="#" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="#">Open</a>
						<a href="#">Edit</a>
						<a href="#">Delete</a>
					</section>
				</section>
				<section class="note">
					<a href="#" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="#">Open</a>
						<a href="#">Edit</a>
						<a href="#">Delete</a>
					</section>
				</section>
				<section class="note">
					<a href="#" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="#">Open</a>
						<a href="#">Edit</a>
						<a href="#">Delete</a>
					</section>
				</section>
				<section class="note">
					<a href="#" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="#">Open</a>
						<a href="#">Edit</a>
						<a href="#">Delete</a>
					</section>
				</section>
				<section class="note">
					<a href="#" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="#">Open</a>
						<a href="#">Edit</a>
						<a href="#">Delete</a>
					</section>
				</section>
				<section class="note">
					<a href="#" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="#">Open</a>
						<a href="#">Edit</a>
						<a href="#">Delete</a>
					</section>
				</section>
				<section class="note">
					<a href="#" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="#">Open</a>
						<a href="#">Edit</a>
						<a href="#">Delete</a>
					</section>
				</section>
			</section>
		</section>

		<?php 
			include '../public/footer.php';
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