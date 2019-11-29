<!DOCTYPE html>
<html>
<head>
	<title>SPrime Services</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
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
				<section class="storyMain">
					<section class="story-title">
						<section class="titleMain">Lorem ipsum dolor sit amet, consectetur.</section>
						<section class="authorMain">By ~ lorem ipsum</section>
					</section>
					<section class="story-thumbnail">
						<img src="./assets/images/GenModRender4.png" height="100%" width="80%" alt="">
					</section>
					<section class="story-btns">
						<section class="btn-main">
							<span class="read-cont">Likes</span>&nbsp;btn
						</section>
						<section class="btn-main">
							<span class="read-cont">Read Now</span>&nbsp;btn
						</section>
					</section>
				</section>
				<section class="storyMain">
					<section class="story-title">
						<section class="titleMain">Lorem ipsum dolor sit amet, consectetur.</section>
						<section class="authorMain">By ~ lorem ipsum</section>
					</section>
					<section class="story-thumbnail">
						<img src="./assets/images/GenModRender4.png" height="100%" width="80%" alt="">
					</section>
					<section class="story-btns">
						<section class="btn-main">
							<span class="read-cont">Likes</span>&nbsp;btn
						</section>
						<section class="btn-main">
							<span class="read-cont">Read Now</span>&nbsp;btn
						</section>
					</section>
				</section>
				<section class="storyMain">
					<section class="story-title">
						<section class="titleMain">Lorem ipsum dolor sit amet, consectetur.</section>
						<section class="authorMain">By ~ lorem ipsum</section>
					</section>
					<section class="story-thumbnail">
						<img src="./assets/images/GenModRender4.png" height="100%" width="80%" alt="">
					</section>
					<section class="story-btns">
						<section class="btn-main">
							<span class="read-cont">Likes</span>&nbsp;btn
						</section>
						<section class="btn-main">
							<span class="read-cont">Read Now</span>&nbsp;btn
						</section>
					</section>
				</section>
				<section class="storyMain">
					<section class="story-title">
						<section class="titleMain">Lorem ipsum dolor sit amet, consectetur.</section>
						<section class="authorMain">By ~ lorem ipsum</section>
					</section>
					<section class="story-thumbnail">
						<img src="./assets/images/GenModRender4.png" height="100%" width="80%" alt="">
					</section>
					<section class="story-btns">
						<section class="btn-main">
							<span class="read-cont">Likes</span>&nbsp;btn
						</section>
						<section class="btn-main">
							<span class="read-cont">Read Now</span>&nbsp;btn
						</section>
					</section>
				</section>
			</section>
		</section>

		<section class="team-members">
			<section class="tm-heading">Devs And Admin</section>
		</section>
	</section>

	<script>
		window.onload = function(){
			loader.style.display = "none";
			app.style.display = "block";
		}
	</script>
</body>
</html>