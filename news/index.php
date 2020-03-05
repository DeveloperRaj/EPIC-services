<?php 
	include("../public/top.php");
	require '../database/conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>news</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/news.css">
</head>
<body>
	<section id="loader">
		Loading...
	</section>

	<section id="newsContainer">

		<?php
			include '../public/header.php';
		?>

		<section class="news-container-main">
			<section class="news-options">
				<section class="search-news">
					<form method="get" action="">
						<input type="text" name="searchNews" placeholder="Search By Tags">
						<button type="submit" name="searchNews" value="true">Search</button>
					</form>
				</section>
				<section class="more-ops">
					<a href="index.php?filter=latest" class="ctrl-btn">
						Latest NEWS
					</a>
				</section>
			</section>
			<?php 
				if (!isset($_GET['searchNews'])) {

					if (!isset($_GET['filter'])) {
						$selectnewsquery = "select * from news where dttm > now() - interval 3 day order by rand() limit 20";
					} 

					else if($_GET['filter'] == "latest") {
						$selectnewsquery = "select * from news order by newsid desc limit 20";
					}

				}
				else {
					$tagsToSearch = $_GET['searchNews'];
					$selectnewsquery = "select * from news where newstags like '%$tagsToSearch%'";
				}

				$res = mysqli_query($conn, $selectnewsquery);
				$checkData = mysqli_num_rows($res);
				if ($checkData > 0) {
					while($row = mysqli_fetch_array($res)) {
						$newsId = $row['newsid'];
						$newsTitle = $row['newstitle'];
						$newsThumbnail = $row['thumbnail'];

			?>
			<section class="n-container">
				<a href="open.php?newsid=<?= $newsId ?>">
					<section class="news-main">
						<section class="news-thumbnail">
							<img src="thumbnails/<?= $newsThumbnail ?>">
						</section>
						<section class="news-title">
							<?= $newsTitle ?>
						</section>
					</section>
				</a>
			</section>
		</section>

		<?php 
					} 
				}
		?>

		<?php 
			include '../public/footer.php';
		?>
		
	</section>

	<script>
		window.onload = function(){
			loader.style.display = "none";
			newsContainer.style.display = "block";
		}
	</script>
</body>
</html>