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
	<link rel="stylesheet" href="styles/admin.css">
	<link rel="stylesheet" href="styles/loader.css">
	<script src="../assets/jquery.js"></script>
</head>
<body>
	<sectiion id="loader">Loading...</sectiion>
	<section id="main">
		<?php include 'header.php'; ?>
		<section class="admin-container">
			<?php 
				include 'sidebar.php';
			?>
			<?php 
				$totalCommunityMembers = mysqli_num_rows(mysqli_query($conn, "select * from users"));
				$lastWeekJoinedUsers = mysqli_num_rows(mysqli_query($conn, "select * from users where joinedat > now() - interval 7 day"));
				$totalStoriesUploaded = mysqli_num_rows(mysqli_query($conn, "select * from stories"));
				$storiesLastWeekUploaded = mysqli_num_rows(mysqli_query($conn, "select * from stories where dttm > now() - interval 7 day"));
			?>
			<section class="main-pannel">
				<section class="numerical-data-container">
					<section class="data-card-container">
						<section class="card-header">Total Community Members</section>
						<section class="card-data">
							<section class="data-main" id="tcm"><?= $totalCommunityMembers ?></section>
							<section class="link-main"><a href="">Manage Users</a></section>
						</section>
					</section>

					<section class="data-card-container">
						<section class="card-header">Members Joined In Last One Week</section>
						<section class="card-data">
							<section class="data-main" id="lwcm"><?= $lastWeekJoinedUsers ?></section>
							<section class="link-main"><a href="">Manage Users</a></section>
						</section>
					</section>

					<section class="data-card-container">
						<section class="card-header">Total Stories Uploaded</section>
						<section class="card-data">
							<section class="data-main" id="tsu"><?= $totalStoriesUploaded ?></section>
							<section class="link-main"><a href="">Manage Stories</a></section>
						</section>
					</section>
					
					<section class="data-card-container">
						<section class="card-header">Last Week Story Uploads</section>
						<section class="card-data">
							<section class="data-main" id="lwsu"><?= $storiesLastWeekUploaded ?></section>
							<section class="link-main"><a href="">Manage Stories</a></section>
						</section>
					</section>
				</section>
			</section>
		</section>
	</section>

	<script>
		$(document).ready(function() {
			const data1 = Number($("#tcm").text());
			let temp1 = 0;
			let t1 = setInterval(function(){
				if (temp1 == data1) {
					clearInterval(t1);
				} else {
					temp1++;
					$("#tcm").text(temp1);
				}
			}, 100);

			const data2 = Number($("#tcm").text());
			let temp2 = 0;
			let t2 = setInterval(function(){
				if (temp2 == data2) {
					clearInterval(t2);
				} else {
					temp2++;
					$("#tcm").text(temp2);
				}
			}, 100);

			const data3 = Number($("#tsu").text());
			let temp3 = 0;
			let t3 = setInterval(function(){
				if (temp3 == data3) {
					clearInterval(t2);
				} else {
					temp3++;
					$("#tsu").text(temp3);
				}
			}, 100);

			const data4 = Number($("#lwsu").text());
			let temp4 = 0;
			let t4 = setInterval(function(){
				if (temp4 == data4) {
					clearInterval(t4);
				} else {
					temp4++;
					$("#lwsu").text(temp4);
				}
			}, 100);
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