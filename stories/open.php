<?php 
	include("../public/top.php");
	require '../database/conn.php';
	require '../database/sessmanage.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Stories</title>
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

		<section class="open-container">
			<?php 

				if (!isset($_GET['storyid'])) {
					header("location: index.php");
				} else {
					$selectstoryopen = "select * from stories where storyid =".$_GET['storyid'];
					$res = mysqli_query($conn, $selectstoryopen);
					$checkData = mysqli_num_rows($res);
					if ($checkData == 1){
						$row = mysqli_fetch_array($res);
						$storyid = $row['storyid'];
						$storyuser = $row['storyuser'];
						$storytitle = $row['storytitle'];
						$storydata = $row['storydata'];
						$uploaddate = $row['dttm'];
						$editPath = "href=edit.php?storyid=$storyid";
						$deletePath = "href=delete.php?storyid=$storyid";
					} else {
						header("location: index.php");
					}
				}

			?>
			<section class="open-title">&bull;<?= $storytitle ?></section>
			<section class="open-main"><pre><?= $storydata ?></pre></section>
			<section class="controls">
				<a href="#" class="ctrl-btn">Like</a>
				<a href="#" class="ctrl-btn">Delete</a>
				<a href="#" class="ctrl-btn">Delete</a>
				<a href="#" class="ctrl-btn">Delete</a>
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