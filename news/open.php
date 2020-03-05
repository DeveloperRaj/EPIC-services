<?php 
	include("../public/top.php");
	require '../database/conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>NEWS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/open.css">
</head>
<body>
	<section id="loader">
		Loading...
	</section>

	<section id="openContainer">

		<?php
			include '../public/header.php';
		?>

		<?php 
			if (isset($_GET['newsid'])){
				$newsid = $_GET['newsid'];
				$opennewsquery = "select * from news where newsid = $newsid";
				$res = mysqli_query($conn, $opennewsquery);
				$row = mysqli_fetch_array($res);
				$thumbnail = $row['thumbnail'];
				$title = $row['newstitle'];
				$data = $row['newsdata'];
			} else {
				echo "<script>window.location.href = 'index.php';</script>";
			}
		?>

		<section class="open-container">
			<section class="open-title">&bull;<?= $title ?></section>
			<section class="thumbnail"><img src="thumbnails/<?= $thumbnail ?>"></section>
			<section class="open-main">
				<?= $data ?>
			</section>
		</section>

		<?php 
			include '../public/footer.php';
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