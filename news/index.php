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
						<input type="text" name="searchNews" placeholder="Search By Title">
						<button type="submit" name="searchStryBtn">Search</button>
					</form>
				</section>
				<section class="more-ops">
					<a href="#" class="ctrl-btn">
						Latest NEWS
					</a>
					<a href="#" class="ctrl-btn">
						Top this week
					</a>
				</section>
			</section>
			<section class="n-container">
				<a href="open.php"><section class="news-main">
					<section class="news-thumbnail"><img src="../assets/images/book.jpg"></section>
					<section class="news-title">Ad reprehenderit proident excepteur id reprehenderit do sunt reprehenderit sunt ex occaecat in consectetur consectetur voluptate pariatur incididunt aliqua enim commodo sunt sed irure consectetur enim ullamco pariatur.</section>
				</section></a>
				<a href="open.php"><section class="news-main">
					<section class="news-thumbnail"><img src="../assets/images/book.jpg"></section>
					<section class="news-title">Ad reprehenderit proident excepteur id reprehenderit do sunt reprehenderit sunt ex occaecat in consectetur consectetur voluptate pariatur incididunt aliqua enim commodo sunt sed irure consectetur enim ullamco pariatur.</section>
				</section></a>
				<a href="open.php"><section class="news-main">
					<section class="news-thumbnail"><img src="../assets/images/book.jpg"></section>
					<section class="news-title">Ad reprehenderit proident excepteur id reprehenderit do sunt reprehenderit sunt ex occaecat in consectetur consectetur voluptate pariatur incididunt aliqua enim commodo sunt sed irure consectetur enim ullamco pariatur.</section>
				</section></a>
				<a href="open.php"><section class="news-main">
					<section class="news-thumbnail"><img src="../assets/images/book.jpg"></section>
					<section class="news-title">Ad reprehenderit proident excepteur id reprehenderit do sunt reprehenderit sunt ex occaecat in consectetur consectetur voluptate pariatur incididunt aliqua enim commodo sunt sed irure consectetur enim ullamco pariatur.</section>
				</section></a>
				<a href="open.php"><section class="news-main">
					<section class="news-thumbnail"><img src="../assets/images/book.jpg"></section>
					<section class="news-title">Ad reprehenderit proident excepteur id reprehenderit do aliqua enim commodo sunt sed irure consectetur enim ullamco pariatur.</section>
				</section></a>
				<a href="open.php"><section class="news-main">
					<section class="news-thumbnail"><img src="../assets/images/book.jpg"></section>
					<section class="news-title">Ad reprehenderit proident excepteur id reprehenderit do sunt reprehenderit sunt ex occaecat in consectetur consectetur voluptate pariatur incididunt aliqua enim commodo sunt sed irure consectetur enim ullamco pariatur.</section>
				</section></a>
				<a href="open.php"><section class="news-main">
					<section class="news-thumbnail"><img src="../assets/images/book.jpg"></section>
					<section class="news-title">Ad reprehenderit proident excepteur id reprehenderit </section>
				</section></a>
				<a href="open.php"><section class="news-main">
					<section class="news-thumbnail"><img src="../assets/images/book.jpg"></section>
					<section class="news-title">Ad reprehenderit proident excepteur id reprehenderit do sunt reprehenderit sunt ex occaecat in consectetur consectetur voluptate pariatur incididunt aliqua enim commodo sunt sed irure consectetur enim ullamco pariatur.</section>
				</section></a>
				<a href="open.php"><section class="news-main">
					<section class="news-thumbnail"><img src="../assets/images/book.jpg"></section>
					<section class="news-title">Ad reprehenderit proident excepteur id reprehenderit do sunt reprehenderit sunt ex occaecat in consectetur consectetur voluptate pariatur incididunt aliqua enim commodo sunt sed irure consectetur enim ullamco pariatur.</section>
				</section></a>
				<a href="open.php"><section class="news-main">
					<section class="news-thumbnail"><img src="../assets/images/book.jpg"></section>
					<section class="news-title">Ad reprehenderit proident excepteur id reprehenderit do sunt reprehenderit sunt ex occaecat in consectetur consectetur voluptate pariatur incididunt aliqua enim commodo sunt sed irure consectetur enim ullamco pariatur.</section>
				</section></a>
				<a href="open.php"><section class="news-main">
					<section class="news-thumbnail"><img src="../assets/images/book.jpg"></section>
					<section class="news-title">Ad reprehenderit proident excepteur id reprehenderit do sunt reprehenderit sunt ex occaecat in consectetur consectetur voluptate pariatur incididunt aliqua enim commodo sunt sed irure consectetur enim ullamco pariatur.</section>
				</section></a>
				<a href="open.php"><section class="news-main">
					<section class="news-thumbnail"><img src="../assets/images/book.jpg"></section>
					<section class="news-title">Ad reprehenderit proident excepteur id reprehenderit do sunt reprehenderit sunt ex occaecat in consectetur consectetur voluptate pariatur incididunt aliqua enim commodo sunt sed irure consectetur enim ullamco pariatur.</section>
				</section></a>
				<a href="open.php"><section class="news-main">
					<section class="news-thumbnail"><img src="../assets/images/book.jpg"></section>
					<section class="news-title">Ad reprehenderit proident excepteur id reprehenderit do sunt reprehenderit sunt ex occaecat in consectetur consectetur voluptate pariatur incididunt aliqua enim commodo sunt sed irure consectetur enim ullamco pariatur.</section>
				</section></a>
			</section>
		</section>

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