<?php 
	include("../public/top.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles/common.css">
</head>
<body>

	<?php 
		include '../public/header.php';
	?>

	<main>
		<div class="signup-image">
			<div class="alac">
				<div class="alac-header">
					Want To Create New Account?
				</div>
				<div class="alac-button">
					<a href="signup.php" class="btn">Sign Up</a>
				</div>
			</div>
		</div>
		<div class="signup-form">
			<div class="form-header">Sign In</div>
			<div class="get-data-row">
				<div class="data-header">Username</div>
				<div class="data-input"><input class="inp" type="text" name="" placeholder="Userame"></div>
			</div>
			<div class="get-data-row">
				<div class="data-header">Password</div>
				<div class="data-input"><input class="inp" type="password" name="" placeholder="Password"></div>
			</div>
			<div class="get-data-row">
				<button class="btn">Sign In</button>
			</div>
		</div>
	</main>


</body>
</html>