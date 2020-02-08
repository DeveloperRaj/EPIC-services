<?php 
	include("top.php");
	require $upFolderPlaceholder.'database/conn.php';
	if (session_id() == ''){
		session_start();
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>EPIC Services</title>
	<link rel="stylesheet" type="text/css" <?php echo 'href="'. $upFolderPlaceholder . 'public/styles/header.css"'?>>
</head>
<body>

	<header id="header">
		<section class="logo"><span style="margin-right: 10px;font-size: 40px"><b style="color: red;background-color: rgb(242,242,240);">E</b>PIC</span> <b style="color: red;background-color: rgb(242,242,240);">S</b>ervices</section>
		<section class="menu-btn">
			<button onclick="toggleMenu()">Menu</button>
		</section>
		<section class="navigation" id="nav">
			<a <?php echo 'href="'. $upFolderPlaceholder . 'index.php"'?>>Home</a>
			<a <?php echo 'href="'. $upFolderPlaceholder . 'notes/"'?>>Personal Notes</a>
			<a <?php echo 'href="'. $upFolderPlaceholder . 'stories/"'?>>Stories</a>
			<a <?php echo 'href="'. $upFolderPlaceholder . 'news/"'?>>News Flash</a>
			<?php if (!isset($_SESSION['user'])){ ?>
				<a <?php echo 'href="'. $upFolderPlaceholder . 'account/signin.php"'?> style="color: red; background-color: rgb(242,242,240);padding: 10px 10px 10px 10px;font-weight: bolder;">Login</a>
			<?php } else {?>
				<a <?php echo 'href="'. $upFolderPlaceholder . 'account/signout.php"'?> style="color: red; background-color: rgb(242,242,240);padding: 10px 10px 10px 10px;font-weight: bolder;">Logout</a>
			<?php } ?>
		</section>
	</header>

	<script type="text/javascript">
		var isOpen = false;
		function toggleMenu() {
			if(!isOpen){
				header.style.height = "270px";
				setTimeout(function(){
					nav.style.opacity = "1";
					nav.style.pointerEvents = "all";
				}, 500);
				isOpen = true;
			} else {
				setTimeout(function(){
					header.style.height="90px";
				}, 800);
				nav.style.opacity = "0";
				nav.style.pointerEvents = "none";
				isOpen = false;
			}
		}
	</script>

</body>
</html>