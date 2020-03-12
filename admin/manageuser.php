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
	<link rel="stylesheet" href="styles/manageuser.css">
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
					<section class="user-data-header">User Data</section>
					<section class="user-data-main">
						<div class="table-header-container">
							<div class="header-main">ID</div>
							<div class="header-main">Username</div>
							<div class="header-main">Notes</div>
							<div class="header-main">Stories</div>
							<div class="header-main">Warnings</div>
							<div class="header-main">Options</div>
						</div>
						<?php 
							$getAllUsersQuery = "select * from users";
							$res = mysqli_query($conn, $getAllUsersQuery);
							while($row = mysqli_fetch_array($res)){
								$userid = $row['userid'];
								$username = $row['username'];
								$noteCount = mysqli_num_rows(mysqli_query($conn, "select * from notes where noteuser = '$username'"));
								$storiesCount = mysqli_num_rows(mysqli_query($conn, "select * from stories where storyuser = '$username'"));
								$warnings = mysqli_fetch_array(mysqli_query($conn, "select warns from banstatus where username = '$username'"));
						?>
							<div class="table-data-container">
								<div class="data-main"><?= $userid ?></div>
								<div class="data-main"><?= $username ?></div>
								<div class="data-main"><?= $noteCount ?></div>
								<div class="data-main"><?= $storiesCount ?></div>
								<div class="data-main"><?= $warnings['warns'] ?></div>
								<div class="option-container">
									<div class="option-main"><button onclick="warnUser('<?= $username ?>')">Warn</button></div>
									<div class="option-main"><button onclick="banUser('<?= $username ?>')">Ban</button></div>
									<div class="option-main"><button onclick="deleteUser('<?= $username ?>')">Delete</button></div>
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
					for(let j = 0; j < 3; j++){
						allOptionButtons[optionCounter].style.backgroundColor = "rgb(70, 97, 116)";
						optionCounter++;
					}
				} else {
					allDataDivs[i].style.backgroundColor = "rgba(70, 97, 116,0.5)";
					for(let j = 0; j < 3; j++){
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