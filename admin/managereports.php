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
	<link rel="stylesheet" href="styles/managereports.css">
	<link rel="stylesheet" href="styles/loader.css">
	<script src="../assets/jquery.js"></script>
	<script src="functionality.js"></script>
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
				<section class="user-data-container">
					<section class="user-data-header">Reports Data</section>
					<section class="user-data-main">
						<div class="table-header-container">
							<div class="header-main">Report ID</div>
							<div class="header-main">Writeup ID</div>
							<div class="header-main">Uploader</div>
							<div class="header-main">Title</div>
							<div class="header-main">Reported For</div>
							<div class="header-main">Options</div>
						</div>
						<?php 
							$getAllReportsQuery = "select * from reports";
							$res = mysqli_query($conn, $getAllReportsQuery);
							while($row = mysqli_fetch_array($res)){
								$reportId = $row['reportid'];
								$writeupId = $row['reportedstoryid'];
								$reportReason = $row['reportreason'];
								$getWriteUpData = "select * from stories where storyid = $writeupId";
								$res2 = mysqli_query($conn, $getWriteUpData);
								$row = mysqli_fetch_array($res2);
								$uploader = $row['storyuser'];
								$title = $row['storytitle'];
						?>
						<div class="table-data-container">
							<div class="data-main"><?= $reportId ?></div>
							<div class="data-main"><?= $writeupId ?></div>
							<div class="data-main"><?= $uploader ?></div>
							<div class="data-main"><a href="read.php?storyid=$storyid"><?= $title ?></a></div>
							<div class="data-main"><?= $reportReason ?></div>
							<div class="option-container">
								<div class="option-main"><button onclick="warnUser('<?= $uploader ?>', '<?= $reportReason ?>', true, '<?= $reportId ?>')">Warn</button></div>
								<div class="option-main"><button onclick="banUser('<?= $uploader ?>', '<?= $reportReason ?>', true, '<?= $reportId ?>')">Ban</button></div>
								<div class="option-main"><button onclick="privateStory('<?= $writeupId ?>', true, '<?= $reportId ?>')">SetPrivate</button></div>
							</div>
						</div>
						<?php } ?>
					</section>
				</section>
			</section>
		</section>
	</section>

	<script type="text/javascript">
		window.onload = function(){
			const allDataDivs = document.getElementsByClassName('table-data-container');
			const allOptionButtons = document.querySelectorAll(".option-container .option-main button");
			let optionCounter = 0;
			for(let i = 0; i < allDataDivs.length; i++) {
				if (i % 2 == 0) {
					allDataDivs[i].style.backgroundColor = "rgba(166,239,140,0.5)";
					for(let j = 0; j < 4; j++){
						allOptionButtons[optionCounter].style.backgroundColor = "rgb(70, 97, 116)";
						optionCounter++;
					}
				} else {
					allDataDivs[i].style.backgroundColor = "rgba(70, 97, 116,0.5)";
					for(let j = 0; j < 4; j++){
						allOptionButtons[optionCounter].style.backgroundColor = "rgb(166,239,140)";
						allOptionButtons[optionCounter].style.color = "rgb(70, 97, 116)";
						allOptionButtons[optionCounter].style.fontWeight = "bold";
						optionCounter++;
					}
				}
			}
		}
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			loader.style.display = "none";
			main.style.display = "block";
		});
	</script>
</body>
</html>