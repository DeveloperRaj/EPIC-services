<?php 
	include("top.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" <?php echo 'href="'. $upFolderPlaceholder . 'public/styles/footer.css"'?>>
</head>
<body>
	<footer class="f-main">
		<section class="footer-container">
			<section class="footer-main-header">
				Contact Us
			</section>
			<section class="footer-main-body">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium accusamus fugit laborum quas deleniti earum tempora magnam eos unde velit tempore, hic saepe placeat sapiente consectetur, impedit incidunt illum ad.
			</section>
		</section>
		<section class="footer-container links">
			<section class="footer-main-header">
				Quick Links
			</section>
			<section class="footer-main-body">
				<a <?php echo 'href="'. $upFolderPlaceholder . 'index.php"'?>>Home</a>
				<a <?php echo 'href="'. $upFolderPlaceholder . 'notes/"'?>>Personal Notes</a>
				<a <?php echo 'href="'. $upFolderPlaceholder . 'stories/"'?>>Stories</a>
				<a <?php echo 'href="'. $upFolderPlaceholder . 'news/"'?>>NEWS flash</a>
				<a <?php echo 'href="'. $upFolderPlaceholder . 'account/signin.php"'?>>Sign In</a>
				<a <?php echo 'href="'. $upFolderPlaceholder . 'account/signup.php"'?>>Sign Up</a>
			</section>
		</section>
		<section class="footer-container links">
			<section class="footer-main-header">
				Social Media
			</section>
			<section class="footer-main-body">
				<a href="#">Facebook</a>
				<a href="#">Instagram</a>
				<a href="#">Twitter</a>
				<a href="#">Reddit</a>
				<a href="#">Pinterest</a>
				<a href="#">youtube</a>
			</section>
		</section>
	</footer>
	<footer class="copyright">
		Copyright &copy; reserved to EPIC services	
	</footer>
</body>
</html>