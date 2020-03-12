<?php 
	include("public/top.php");
	require 'database/conn.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>EPIC Services</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	
	<section id="loader">
		Loading...
	</section>

	<section id="app">
		<?php 
			include 'public/header.php';
		?>

		<section class="banner">
			<section class="banner-head">
				We are&nbsp;<span style="color: red; font-weight: bolder;">epic</span>
			</section>
			<section class="banner-body">
				We Are Enhanced and Powerful Individual's Community <br> with Over ten thousand Story Writers and Readers
			</section>
		</section>

		<section class="services">
			<section class="s-heading">Our Services</section>
			<section class="s-body">
				<fieldset>
					<legend>Personal Notes</legend>
					Having issues with keeping notes? Throw your sticky notes and use our&nbsp;<span style="color: red; font-weight: bolder;">EPIC</span> personal notes service to keep track of your tasks, meetings, goals etc. . . .  
				</fieldset>
				<fieldset>
					<legend>Story Read/Write</legend>
					Want to be a Writer but you don't have platform? Try our&nbsp;<span style="color: red; font-weight: bolder;">EPIC</span> Story Reading/Writing service. We have different categories like Motivation, comedy, love etc. . . .
				</fieldset>
				<fieldset>
					<legend>NEWS Flash - Latest</legend>
					Always looking for what's happening in world? Try our&nbsp;<span style="color: red; font-weight: bolder;">EPIC</span>NEWS Flash to get latest news about anything like Politics, sports, crimes, techs etc. . . .
				</fieldset>
			</section>
		</section>

		<section class="top-stories">
			<section class="ts-heading">Top Stories</section>
			<section class="top-stories-body">
				<?php 
					$selectWeeklyTop = "select storyid from stories where dttm > date(now()) - interval 7 day and storyuser in (select username from banstatus where isbanned = 0) and ispublic = 1";
					$res = mysqli_query($conn, $selectWeeklyTop);
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
					for($i = 0; $i < 4; $i++) {
							$selecttopstoriesquery = "select * from stories where storyid = '".$topweekdata[$i]["storyid"]."'";
							$res = mysqli_query($conn, $selecttopstoriesquery);
							$row = mysqli_fetch_array($res);
							$storyid = $row['storyid'];
							$storyuser = $row['storyuser'];
							$storytitle = $row['storytitle'];
							$storythumbnail = $row['thumbnail'];
							$uploaddate = $row['dttm'];
							$storyopenpath = "stories/open.php?storyid=$storyid";
				?>
					<a href='<?= $storyopenpath ?>'>
						<section class="storyMain">
							<section class="story-thumbnail">
								<img src="stories/thumbnails/<?= $storythumbnail ?>">
							</section>
							<section class="story-title"><?= $storytitle ?></section>
							<section class="author">By~ <?= $storyuser ?></section>
							<section class="uploadDate"><?= $uploaddate ?></section>
						</section>
					</a>
				<?php } ?>
			</section>
		</section>

		<section class="team-members">
			<section class="tm-heading">Devs And Admin</section>
			<section class="tm-body">
				<section class="tm-member-container">
					<section class="tm-member-photo">
						<img src="assets/images/john.jpg" alt="">
					</section>
					<section class="tm-member-about">
					<section class="tm-member-name">John Doe</section>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus sunt aspernatur modi unde perspiciatis Repudiandae voluptates quo voluptatem, rerum in.</section>
					<section class="tm-member-social">
						<a href="#">Facebook</a>
						<a href="#">Instagram</a>
						<a href="#">Linked-IN</a>
						<a href="#">github</a>
					</section>
				</section>
				<section class="tm-member-container">
					<section class="tm-member-photo">
						<img src="assets/images/john.jpg" alt="">
					</section>
					<section class="tm-member-about">
					<section class="tm-member-name">John Doe</section>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus sunt aspernatur modi unde perspiciatis Repudiandae voluptates quo voluptatem, rerum in.</section>
					<section class="tm-member-social">
						<a href="#">Facebook</a>
						<a href="#">Instagram</a>
						<a href="#">Linked-IN</a>
						<a href="#">github</a>
					</section>
				</section>
				<section class="tm-member-container">
					<section class="tm-member-photo">
						<img src="assets/images/john.jpg" alt="">
					</section>
					<section class="tm-member-about">
					<section class="tm-member-name">John Doe</section>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus sunt aspernatur modi unde perspiciatis Repudiandae voluptates quo voluptatem, rerum in.</section>
					<section class="tm-member-social">
						<a href="#">Facebook</a>
						<a href="#">Instagram</a>
						<a href="#">Linked-IN</a>
						<a href="#">github</a>
					</section>
				</section>
			</section>
		</section>

		<?php 

			include 'public/footer.php'; 

		?>
	</section>

	<script>
		window.onload = function(){
			loader.style.display = "none";
			app.style.display = "block";
		}
	</script>
</body>
</html>