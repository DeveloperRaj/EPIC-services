<?php 
	include("../public/top.php");
	require '../database/conn.php';
	require '../database/sessmanage.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Writeups</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/stories.css">
	<script type="text/javascript" src="../assets/jquery.js"></script>
</head>
<body>
	<section id="loader">
		Loading...
	</section>

	<section id="storiessContainer">

		<script type="text/javascript">
			storiessContainer.style.display = "none";
		</script>

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
						Latest Writeup
					</a>
					<a href="index.php?filter=weeklytop" class="ctrl-btn">
						Top this week
					</a>
					<a href="index.php?filter=mystories" class="ctrl-btn">
						My Writeup
					</a>
					<a href="add.php" class="ctrl-btn">
						Add Writeup
					</a>
				</section>
			</section>
			<section class="st-container">
				<?php 

					if (!isset($_GET['searchStory'])) {

						if (!isset($_GET['filter'])) {
							$selectstoriesquery = "select * from stories where storyuser in (select username from banstatus where isbanned = 0) and ispublic = 1 order by rand() limit 20";
						} 

						else if($_GET['filter'] == "latest") {
							$selectstoriesquery = "select * from stories where storyuser in (select username from banstatus where isbanned = 0) and ispublic = 1 order by storyid desc limit 20";
						} 

						else if ($_GET['filter'] == "weeklytop") {
							$selectstoriesquery = "select storyid from stories where dttm > date(now()) - interval 7 day and storyuser in (select username from banstatus where isbanned = 0) and ispublic = 1";
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
						$selectstoriesquery = "select * from stories where storytags like '%$tagsToSearch%' and storyuser in (select username from banstatus where isbanned = 0) and ispublic = 1";
					}

					if (isset($_GET['filter']) && $_GET['filter'] == "weeklytop") {

						$res = mysqli_query($conn, $selectstoriesquery);
						$topweekdata = array();
						while($row = mysqli_fetch_array($res)){
							$checkLikes = "select * from storylikes where storyid = '".$row['storyid']."'";
							$likesRes = mysqli_num_rows(mysqli_query($conn, $checkLikes));
							$temparray = array("storyid" => $row['storyid'], "likes" => $likesRes);
							array_push($topweekdata, $temparray);
						}
						for ($i = 0; $i < count($topweekdata); $i++) {
							for($j = $i + 1; $j < count($topweekdata); $j++) {
								if ($topweekdata[$j]["likes"] > $topweekdata[$i]["likes"]){
									$temp = $topweekdata[$i];
									$topweekdata[$i] = $topweekdata[$j];
									$topweekdata[$j] = $temp;
								}
							}
						}

						for($i = 0; $i < count($topweekdata); $i++) {
							$selecttopstoriesquery = "select * from stories where storyid = '".$topweekdata[$i]["storyid"]."'";
							$res = mysqli_query($conn, $selecttopstoriesquery);
							$row = mysqli_fetch_array($res);
							$storyid = $row['storyid'];
							$storyuser = $row['storyuser'];
							$storytitle = $row['storytitle'];
							$storythumbnail = $row['thumbnail'];
							$uploaddate = $row['dttm'];
							$storyopenpath = "open.php?storyid=$storyid";
						?>
							<a href='<?= $storyopenpath ?>'>
								<section class="storyMain">
									<section class="story-thumbnail">
										<img src="thumbnails/<?= $storythumbnail ?>">
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

					} else {

						$res = mysqli_query($conn, $selectstoriesquery);
						$checkData = mysqli_num_rows($res);

						if ($checkData > 0){
							while($row = mysqli_fetch_array($res)) {
								$storyid = $row['storyid'];
								$storyuser = $row['storyuser'];
								$storytitle = $row['storytitle'];
								$storythumbnail = $row['thumbnail'];
								$uploaddate = $row['dttm'];
								$storyopenpath = "href=open.php?storyid=$storyid";
				?>
				<a <?= $storyopenpath ?>>
					<section class="storyMain">
						<section class="story-thumbnail">
							<img src="thumbnails/<?= $storythumbnail ?>">
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
					 } 
				?>
			</section>
			<section style="width: 100%;text-align: center;"><button onclick="window.location.reload();" style="border: none; background-color: none;margin-top: 50px;font-size: 18px;font-weight: bold">Click here to read more Writeup</button></section>
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