<?php 
	include("../public/top.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Stories</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/open.css">
</head>
<body>
	<section id="loader">
		Loading...
	</section>

	<section id="openContainer">

		<?php
			include '../public/header.php';
		?>

		<section class="open-container">
			<section class="open-title">&bull;This is title</section>
			<section class="thumbnail"><img src="../assets/images/book.jpg"></section>
			<section class="open-main">Labore nulla occaecat dolor minim et amet labore id sint magna deserunt dolor voluptate ad reprehenderit sunt ea in do irure est dolor in ut deserunt cupidatat elit minim id anim magna cillum do dolore est incididunt fugiat exercitation ut culpa duis incididunt in esse irure est magna veniam mollit in in fugiat anim incididunt in velit dolore non minim magna ullamco elit velit excepteur ad voluptate deserunt nostrud in proident et et duis amet dolor non sit cupidatat non deserunt qui labore consectetur in ut sunt excepteur eu exercitation do reprehenderit nostrud anim cupidatat deserunt nisi labore cillum in adipisicing officia eiusmod nulla velit irure ad voluptate fugiat officia sunt est et pariatur excepteur labore nisi qui id laborum laborum dolore velit ea nisi qui id in dolor laborum mollit quis officia nulla culpa et minim veniam nostrud occaecat aute amet cupidatat velit adipisicing non ut dolor sint veniam nulla exercitation incididunt dolor in eiusmod est eu ullamco nostrud quis ullamco consequat pariatur nostrud laborum enim deserunt eu est sint sed occaecat dolor velit ut officia quis pariatur duis exercitation incididunt labore nostrud ad incididunt mollit et ut sit deserunt aliquip non incididunt tempor id et deserunt ea excepteur elit dolore ullamco anim commodo laborum officia eu magna nostrud mollit dolor nulla ad laboris proident commodo est cillum consectetur labore duis.</section>
			<section class="controls">
				<a href="#" class="ctrl-btn">Edit</a>
				<a href="#" class="ctrl-btn">Delete</a>
			</section>
		</section>

		<?php 
			include '../public/footer.php';
		?>
		
	</section>

	<script>
		window.onload = function(){
			loader.style.display = "none";
			openContainer.style.display = "block";
		}
	</script>
</body>
</html>