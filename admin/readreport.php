<?php 
	require '../database/conn.php';
	require '../database/sessmanage.php';

	if (!isset($_SESSION['user'])) {
		echo "<script>window.location.href='../'</script>";
	} else {
		if ($_SESSION['user'] !== "admin") {
			echo "<script>window.location.href='../'</script>";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/readreport.css">
	<link rel="stylesheet" href="styles/loader.css">
	<script src="../assets/jquery.js"></script>
</head>
<body>
	<section id="loader">Loading...</section>

	<section id="main">
		<?php include 'header.php'; ?>
		<section class="admin-container">
			<?php 
				include 'sidebar.php';
			?>
			<section class="main-pannel">
				<section class="pannel-header">Review Report</section>
				<section class="read-story-container">
					<?php 
						$storyid = $_GET['storyid'];
						$getStory = "select * from stories where storyid = $storyid";
						$res = mysqli_query($conn, $getStory);
						$row = mysqli_fetch_array($res);
						$title = $row['storytitle'];
						$thumbnail = $row['thumbnail'];
						$data = $row['storydata'];
					?>
					<section class="title-container"><?= $title ?></section>
					<section class="img-container"><img src="../stories/thumbnails/<?= $thumbnail ?>" /></section>
					<section class="data-container"><pre><?= $data ?></pre></section>
				</section>
				<section class="options">
					<button>Warn</button>
					<button>Ban</button>
					<button>Delete</button>
				</section>
			</section>
		</section>
	</section>

	<script type="text/javascript">

		$(document).ready(function(){

			$("input[data-usage='stags']").on("input", function(){

				$(this).val($.trim($(this).val()));

			});

		});
		
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			loader.style.display = "none";
			main.style.display = "block";
		});
	</script>
</body>
</html>