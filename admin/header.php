<?php 
	include("../public/top.php");
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
		<section class="navigation" id="nav">
			<?php if (!isset($_SESSION['user'])){ ?>
				<a <?php echo 'href="'. $upFolderPlaceholder . 'account/signin.php"'?> style="color: red; background-color: rgb(242,242,240);padding: 10px 10px 10px 10px;font-weight: bolder;">Login</a>
			<?php } else {?>
				<a <?php echo 'href="'. $upFolderPlaceholder . 'account/signout.php"'?> style="color: red; background-color: rgb(242,242,240);padding: 10px 10px 10px 10px;font-weight: bolder;">Logout</a>
			<?php } ?>
		</section>
	</header>
</body>
</html>