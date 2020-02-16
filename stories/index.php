<?php 
	include("../public/top.php");
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
						<input type="text" name="searchStory" placeholder="Search By Title">
						<button type="submit" name="searchStryBtn">Search</button>
					</form>
				</section>
				<section class="more-ops">
					<a href="#" class="ctrl-btn">
						Latest Stories
					</a>
					<a href="#" class="ctrl-btn">
						Top this week
					</a>
					<a href="#" class="ctrl-btn">
						My Stories
					</a>
					<a href="add.php" class="ctrl-btn">
						Add New Story
					</a>
				</section>
			</section>
			<section class="st-container">
				<a href="open.php">
					<section class="storyMain">
						<section class="story-thumbnail">
							<img src="../assets/images/GenModRender4.png">
						</section>
						<section class="story-title">
							Ut nisi minim et voluptate anim aute minim ut elit dolor ad in consequat aute officia reprehenderit laboris et nostrud sed incididunt.
						</section>
						<section class="author">By~ Dolore veniam.</section>
						<section class="uploadDate">24/06/2019</section>
					</section>
				</a>

				<a href="open.php">
					<section class="storyMain">
						<section class="story-thumbnail">
							<img src="../assets/images/GenModRender4.png">
						</section>
						<section class="story-title">
							Ut nisi minim et voluptate anim aute minim ut elit dolor ad in consequat aute officia reprehenderit laboris et nostrud sed incididunt.
						</section>
						<section class="author">By~ Dolore veniam.</section>
						<section class="uploadDate">24/06/2019</section>
					</section>
				</a>

				<a href="open.php">
					<section class="storyMain">
						<section class="story-thumbnail">
							<img src="../assets/images/GenModRender4.png">
						</section>
						<section class="story-title">
							Ut nisi minim et voluptate anim aute minim ut elit dolor ad in consequat aute officia reprehenderit laboris et nostrud sed incididunt.
						</section>
						<section class="author">By~ Dolore veniam.</section>
						<section class="uploadDate">24/06/2019</section>
					</section>
				</a>

				<a href="open.php">
					<section class="storyMain">
						<section class="story-thumbnail">
							<img src="../assets/images/GenModRender4.png">
						</section>
						<section class="story-title">
							Ut nisi minim et voluptate anim aute minim ut elit dolor ad in consequat aute officia reprehenderit laboris et nostrud sed incididunt.
						</section>
						<section class="author">By~ Dolore veniam.</section>
						<section class="uploadDate">24/06/2019</section>
					</section>
				</a>

				<a href="open.php">
					<section class="storyMain">
						<section class="story-thumbnail">
							<img src="../assets/images/GenModRender4.png">
						</section>
						<section class="story-title">
							Ut nisi minim et voluptate anim aute minim ut elit dolor ad in consequat aute officia reprehenderit laboris et nostrud sed incididunt.
						</section>
						<section class="author">By~ Dolore veniam.</section>
						<section class="uploadDate">24/06/2019</section>
					</section>
				</a>

				<a href="open.php">
					<section class="storyMain">
						<section class="story-thumbnail">
							<img src="../assets/images/GenModRender4.png">
						</section>
						<section class="story-title">
							Ut nisi minim et voluptate anim aute minim ut elit dolor ad in consequat aute officia reprehenderit laboris et nostrud sed incididunt.
						</section>
						<section class="author">By~ Dolore veniam.</section>
						<section class="uploadDate">24/06/2019</section>
					</section>
				</a>

				<a href="open.php">
					<section class="storyMain">
						<section class="story-thumbnail">
							<img src="../assets/images/GenModRender4.png">
						</section>
						<section class="story-title">
							Ut nisi minim et voluptate anim aute minim ut elit dolor ad in consequat aute officia reprehenderit laboris et nostrud sed incididunt.
						</section>
						<section class="author">By~ Dolore veniam.</section>
						<section class="uploadDate">24/06/2019</section>
					</section>
				</a>
			</section>
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