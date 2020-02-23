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
	<link rel="stylesheet" href="styles/stories.css">
	<script type="text/javascript" src="../assets/jquery.js"></script>
</head>
<body>
	<section id="loader">
		Loading...
	</section>

	<section id="storiessContainer">

		<?php
			include '../public/header.php';
		?>

		<section class="stories-container-main">
			<section class="stories-options">
				<section class="search-stories">
					<form method="get" action="">
						<input type="text" name="storytags" placeholder="Search By Tags">
						<button type="submit" name="searchStory" value="true">Search</button>
					</form>
				</section>
				<section class="more-ops">
					<a href="index.php?filter=latest" class="ctrl-btn">
						Latest Stories
					</a>
					<a href="index.php?filter=weeklytop" class="ctrl-btn">
						Top this week
					</a>
					<a href="index.php?filter=mystories" class="ctrl-btn">
						My Stories
					</a>
					<a href="add.php" class="ctrl-btn">
						Add New Story
					</a>
				</section>
			</section>
			<section class="st-container">
				<?php 

					if (!isset($_GET['searchStory'])) {

						if (!isset($_GET['filter'])) {
							$selectstoriesquery = "select * from stories order by rand() limit 20";
						} 

						else if($_GET['filter'] == "latest") {
							$selectstoriesquery = "select * from stories order by storyid desc limit 20";
						} 

						else if ($_GET['filter'] == "latest") {

						} 

						else if ($_GET['filter'] == "mystories") {
							if (!isset($_SESSION['user'])) {
								echo "<script>window.location.href='../account/signin.php'</script>";
							} 

							else {
								$user = $_SESSION['user'];
								$selectstoriesquery = "select * from stories where storyuser = '$user'";
							}
						}

					} 

					else {
						$tagsToSearch = $_GET['storytags'];
						$selectstoriesquery = "select * from stories where storytags like '%$tagsToSearch%'";
					}

					$res = mysqli_query($conn, $selectstoriesquery);
					$checkData = mysqli_num_rows($res);

					if ($checkData > 0){
						while($row = mysqli_fetch_array($res)) {
							$storyid = $row['storyid'];
							$storyuser = $row['storyuser'];
							$storytitle = $row['storytitle'];
							$uploaddate = $row['dttm'];
							$storyopenpath = "href=open.php?storyid=$storyid";
				?>
				<a <?= $storyopenpath ?>>
					<section class="storyMain">
						<section class="story-thumbnail">
							<img src="../assets/images/GenModRender4.png">
						</section>
						<section class="story-title">
							<?= $storytitle ?>
						</section>
						<section class="author">By~ <?= $storyuser ?></section>
						<section class="uploadDate"><?= $uploaddate ?></section>
					</section>
				</a>
				<?php 
						}
					 } 
				?>
			</section>
			<section style="width: 100%;text-align: center;"><button onclick="window.location.reload();" style="border: none; background-color: none;margin-top: 50px;font-size: 18px;font-weight: bold">Click here to read more stories</button></section>
		</section>

		<?php 
			include '../public/footer.php';
		?>
		
	</section>

	<script>
		window.onload = function(){
			loader.style.display = "none";
			storiessContainer.style.display = "block";
		}
	</script>
</body>
</html>