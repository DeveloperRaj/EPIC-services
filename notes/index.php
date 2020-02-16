<?php 
	include("../public/top.php");
	require '../database/conn.php';
	require '../database/sessmanage.php';
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
			header("location: ../account/signin.php");
		} else {
			$noteuser = $_SESSION['user'];
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
				<?php 

					$selectallnotes = "select * from notes where noteuser = '$noteuser'";
					$res = mysqli_query($conn, $selectallnotes);
					$checkData = mysqli_num_rows($res);

					if ($checkData > 0){
						while($row = mysqli_fetch_array($res)) {
							$noteid = $row['noteid'];
							$noteuser = $row['noteuser'];
							$notetitle = $row['notetitle'];
							$openPath = "href=open.php?noteid=$noteid";
							$editPath = "href=edit.php?noteid=$noteid";
							$deletePath = "href=delete.php?noteid=$noteid";
							// print_r($row);
				?>
				<section class="note">
					<a <?= $openPath ?> class="note-link"><?= $notetitle ?></a>
					<section class="note-controls">
						<a <?= $editPath ?>>Edit</a>
						<a <?= $deletePath ?>>Delete</a>
					</section>
				</section>
				<?php 
						}
					 } //else { echo "<script>alert('add your first note now!!');window.location.href = 'add.php';</script>"; }
				?>
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