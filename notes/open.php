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
	<link rel="stylesheet" href="styles/open.css">
</head>
<body>
	<?php 
		if (!isset($_SESSION['user'])){
			header("location: ../account/signin.php");
		} else {
	?>
	<section id="loader">
		Loading...
	</section>

	<section id="openContainer">

		<?php
			include '../public/header.php';
		?>

		<section class="open-container">
			<?php 

				if (!isset($_GET['noteid'])) {
					header("location: index.php");
				} else {
					$selectnoteopen = "select * from notes where noteid =".$_GET['noteid'];
					$res = mysqli_query($conn, $selectnoteopen);
					$checkData = mysqli_num_rows($res);
					if ($checkData == 1){
						$row = mysqli_fetch_array($res);
						$noteid = $row['noteid'];
						$noteuser = $row['noteuser'];
						$notetitle = $row['notetitle'];
						$notedata = $row['notedata'];
						$editPath = "href=edit.php?noteid=$noteid";
						$deletePath = "href=delete.php?noteid=$noteid";
					} else {
						header("location: index.php");
					}
				}

			?>
			<section class="open-title">&bull;<?= $notetitle ?></section>
			<section class="open-main"><pre><?= $notedata ?></pre></section>
			<section class="controls">
				<a <?= $editPath ?> class="ctrl-btn">Edit</a>
				<a <?= $deletePath ?> class="ctrl-btn">Delete</a>
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
			openContainer.style.display = "block";
		}
	</script>
</body>
</html>