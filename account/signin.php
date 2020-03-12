<?php 
	include("../public/top.php");
	require '../database/conn.php';
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
		<form method="post">
			<div class="signup-form">
				<div class="form-header">Sign In</div>
				<div class="get-data-row">
					<div class="data-header">Username</div>
					<div class="data-input"><input class="inp" type="text" name="usrnm" placeholder="Userame"></div>
				</div>
				<div class="get-data-row">
					<div class="data-header">Password</div>
					<div class="data-input"><input class="inp" type="password" name="pswd" placeholder="Password"></div>
				</div>
				<div class="get-data-row">
					<button class="btn" type="submit" name="sbmt">Sign In</button>
				</div>
			</div>
		</form>
	</main>


</body>
</html>

<?php 

	if (isset($_POST['sbmt'])){

		$user = ltrim($_POST['usrnm']);
		$user = rtrim($user);

		$password = ltrim($_POST['pswd']);
		$password = rtrim($password);

		if ($user === "epicadmin" && $password === "epic2020") {

			session_start();
			$_SESSION['user'] = "admin";
			echo "<script>window.location.href='../admin/'</script>";

		} else{

			$selectusertologinquery = "select username, pass from users where username = '$user' and username in (select username from banstatus where isbanned = 0)";
			$res = mysqli_query($conn, $selectusertologinquery);
			if ($res) {
				$row = mysqli_fetch_array($res);
				if ($password === $row[1]) {
					session_start();
					$_SESSION['user'] = $user;
					echo "<script>window.location.href='../'</script>";
				} else {
					echo "<script>alert('invalid username or password');</script>";
				}
			} else {
				echo mysqli_error($conn);
			}

		}

	}
	
?>