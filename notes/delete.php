<?php 
	if (!isset($_GET['noteid'])){
		header("location: index.php");
	} else {
		$noteid = $_GET['noteid'];
	}
	include("../public/top.php");
	require '../database/sessmanage.php';
	if (!isset($_SESSION['user'])){
		header("location: ../account/signin.php");
	} else if("a" == "a"){
		performDelete();
	}
	else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Personal Notes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="../assets/jquery.js"></script>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Montserrat|Poppins|ZCOOL+XiaoWei&display=swap');
		body {
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			width: 100%;
			height: 100vh;
		}
		.permission-container {
			width: 70%;
			height: 180px;
			/*background-color: #987123;*/
		}
		.ask {
			width: 100%;
			height: 50%;
			display: flex;
			justify-content: center;
			align-items: center;
			font-family: 'ZCOOL XiaoWei', serif;
			font-size: 26px;
		}
		.ask-controls {
			width: 100%;
			height: 50%;
			display: flex;
			justify-content: center;
			align-items: center;
			font-family: 'Poppins', sans-serif;
		}
		.ask-controls form {
			width: 50%;
			height: 100%;
			display: flex;
			justify-content: space-around;
			align-items: center;
		}
		.ctrl {
			border: none;
			width: 120px;
			height: 40px;
			background-color: #01ac01;
			border-radius: 3px;
			font-size: 14px;
			font-family: 'Poppins', sans-serif;
			display: flex;
			justify-content: center;
			align-items: center;
			color: white;
			text-decoration: none;
			margin-right: 15px;
		}
		@media only screen and (max-width: 600px) {
			.permission-container { width: 90%; }
			.ask { font-size: 18px; }
			.ask-controls form { flex-direction: column;width: 100%;height: 150%; }
		}
	</style>
</head>
<body>
	<section class="permission-container">
		<section class="ask">Delete can no be Undo, would you like to continue?</section>
		<section class="ask-controls">
			<form method="post">
				<span><input type="checkbox" value="atd" name="choice">Remeber My Choice</span>
				<button class="ctrl" name="ctnu">continue</button>
				<button class="ctrl" name="cncl">cancel</button>
			</form>
		</section>
	</section>
</body>
</html>
<?php }
	
	if (isset($_POST['cncl'])) {
		header("location: index.php");
	}

	if (isset($_POST['ctnu'])){
		if (isset($_POST['choice'])){
			
		}
	}
	function performDelete(){echo "string";}
?>