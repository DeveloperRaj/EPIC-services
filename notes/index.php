<?php 
	include("../public/top.php");
	require '../database/conn.php';
	if(session_id() == ''){
		session_start();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Personal Notes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/notes.css">
</head>
<body>
	<?php 
		if (!isset($_SESSION['user'])){
			echo "<script>window.location.href = '../account/signin.php'</script>";
		} else {
	?>
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
						<input type="text" name="searchNote" placeholder="Search By Tags">
						<button type="submit" name="searchNoteBtn">Search</button>
					</form>
				</section>
				<a href="add.php" class="add-new">
					Add New Note
				</a>
			</section>
			<section class="nt-container">
				<section class="note">
					<a href="open.php" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="edit.php">Edit</a>
						<a href="delete.php">Delete</a>
					</section>
				</section>
				<section class="note">
					<a href="open.php" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="edit.php">Edit</a>
						<a href="delete.php">Delete</a>
					</section>
				</section>
				<section class="note">
					<a href="open.php" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="edit.php">Edit</a>
						<a href="delete.php">Delete</a>
					</section>
				</section>
				<section class="note">
					<a href="open.php" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="edit.php">Edit</a>
						<a href="delete.php">Delete</a>
					</section>
				</section>
				<section class="note">
					<a href="open.php" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="edit.php">Edit</a>
						<a href="delete.php">Delete</a>
					</section>
				</section>
				<section class="note">
					<a href="open.php" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="edit.php">Edit</a>
						<a href="delete.php">Delete</a>
					</section>
				</section>
				<section class="note">
					<a href="open.php" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="edit.php">Edit</a>
						<a href="delete.php">Delete</a>
					</section>
				</section>
				<section class="note">
					<a href="open.php" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="edit.php">Edit</a>
						<a href="delete.php">Delete</a>
					</section>
				</section>
				<section class="note">
					<a href="open.php" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="edit.php">Edit</a>
						<a href="delete.php">Delete</a>
					</section>
				</section>
				<section class="note">
					<a href="open.php" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="edit.php">Edit</a>
						<a href="delete.php">Delete</a>
					</section>
				</section>
				<section class="note">
					<a href="open.php" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="edit.php">Edit</a>
						<a href="delete.php">Delete</a>
					</section>
				</section>
				<section class="note">
					<a href="open.php" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="edit.php">Edit</a>
						<a href="delete.php">Delete</a>
					</section>
				</section>
				<section class="note">
					<a href="open.php" class="note-link">laudantium cum repellendus debitis saepe mollitia eos </a>
					<section class="note-controls">
						<a href="edit.php">Edit</a>
						<a href="delete.php">Delete</a>
					</section>
				</section>
			</section>
		</section>

		<?php 
			include '../public/footer.php';
		}
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