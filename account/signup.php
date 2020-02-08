<?php 
	include("../public/top.php");
	require '../database/conn.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles/common.css">
	<script type="text/javascript" src="../assets/jquery.js"></script>
</head>
<body>

	<?php 
		include '../public/header.php';
	?>

	<main>
		<div class="signup-image">
			<div class="alac">
				<div class="alac-header">
					Already Have An Account?
				</div>
				<div class="alac-button">
					<a href="signin.php" class="btn">Sign in</a>
				</div>
			</div>
		</div>
		<form method="post">
			<div class="signup-form">
				<div class="form-header">Sign Up</div>
				<div class="get-data-row">
					<div class="data-header">Full Name</div>
					<div class="data-input"><input class="inp" type="text" name="flnm" placeholder="Full Name" data-usage="fn"><span>Enter your full name</span></div>
				</div>
				<div class="get-data-row">
					<div class="data-header">Email</div>
					<div class="data-input"><input class="inp" type="Email" name="eml" placeholder="Email" data-usage="eml"><span>Enter valid email</span></div>
				</div>
				<div class="get-data-row">
					<div class="data-header">Username</div>
					<div class="data-input"><input class="inp" type="text" name="usrnm" placeholder="Userame" data-usage="usr"><span>Username must be less than 15 characters, No special character</span></div>
				</div>
				<div class="get-data-row">
					<div class="data-header">Password</div>
					<div class="data-input"><input class="inp" type="password" name="pss" placeholder="Password" data-usage="ps1"><span>Password must be 8 to 15 digits, first one should be non-numeric, one uppercase, one lowercase and one special character</span></div>
				</div>
				<div class="get-data-row">
					<div class="data-header">Repeat Password</div>
					<div class="data-input"><input class="inp" type="password" name="pssr" placeholder="Repeat Password" data-usage="ps2"><span>This should be same as password</span></div>
				</div>
				<div class="get-data-row">
					<button class="btn" type="submit" name="signupbtn" data-usage="sbmt" disabled="true">Sign Up</button>
				</div>
			</div>
		</form>
	</main>

	<script type="text/javascript">
			
		let shouldEnableVoter = [false, false, false, false, false];
		function enableBtn(){
			if (!shouldEnableVoter){
				$("button[data-usage='sbmt']").prop('disabled', true);
			} else {
				$("button[data-usage='sbmt']").prop('disabled', false);
			}
		}

		$(document).ready(function(){

			//Validating full name
			$("input[data-usage='fn']").on("input", function(){
				if ($(this).val() == ""){
					$(this).css('border-bottom', '3px solid #f00');
					shouldEnableVoter[0] = false;
				} else {
					$(this).css('border-bottom', '3px solid #0f0');
					shouldEnableVoter[0] = true;
					enableBtn();
				}
			});

			//validating email id
			function validateEmail(){
				var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				if (!regex.test($(this).val())){
					$("input[data-usage='eml']+span").css('display', 'inline');
					$(this).css('border-bottom', '3px solid #f00');
					shouldEnableVoter[1] = false;
				} else {
					$("input[data-usage='eml']+span").css('display', 'none');
					$(this).css('border-bottom', '3px solid #0f0');
					shouldEnableVoter[1] = true;
					enableBtn();
				}
				
			}
			$("input[data-usage='eml']").on("input", validateEmail);

			//validating username
			$("input[data-usage='usr']").on("input", function(){
				if (!$(this).val() == ""){
					if ($(this).val().length > 15){
						$("input[data-usage='usr']+span").css('display', 'block');
						$(this).css('border-bottom', '3px solid #f00');
						shouldEnableVoter[2] = false;
					} else {
						if (!/^[a-zA-Z0-9- ]*$/.test($(this).val())){
							$("input[data-usage='usr']+span").css('display', 'block');
							$(this).css('border-bottom', '3px solid #f00');
							shouldEnableVoter[2] = false;
						} else {
							$(this).val($.trim($(this).val()));
							$("input[data-usage='usr']+span").css('display', 'none');
							$(this).css('border-bottom', '3px solid #0f0');
							shouldEnableVoter[2] = true;
							enableBtn();
						}
					}
				} else {
					$("input[data-usage='usr']+span").css('display', 'block');
					$(this).css('border-bottom', '3px solid #f00');
					shouldEnableVoter[2] = false;
				}
				
			});

			//validating password
			$("input[data-usage='ps1']").on("input", function(){
				if (!$(this).val() == ""){
					var regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
					if (!regex.test($(this).val())) {
						$("input[data-usage='ps1']+span").css('display', 'block');
						$(this).css('border-bottom', '3px solid #f00');
						shouldEnableVoter[3] = false;
					} else {
						$("input[data-usage='ps1']+span").css('display', 'none');
						$(this).css('border-bottom', '3px solid #0f0');
						shouldEnableVoter[3] = true;
						enableBtn();
					}
				} else {
					$("input[data-usage='ps1']+span").css('display', 'block');
					$(this).css('border-bottom', '3px solid #f00');
					shouldEnableVoter[3] = false;
				}
				
			});

			//validating repeat password
			$("input[data-usage='ps2']").on("input", function(){
				if (!$(this).val() == ""){
					if ($(this).val() == $("input[data-usage='ps1']").val()) {
						$("input[data-usage='ps2']+span").css('display', 'none');
						$(this).css('border-bottom', '3px solid #0f0');
						shouldEnableVoter[4] = true;
						enableBtn();
					} else {
						$("input[data-usage='ps2']+span").css('display', 'block');
						$(this).css('border-bottom', '3px solid #f00');
						shouldEnableVoter[4] = false;
					}
				}
				 else {
					$("input[data-usage='ps2']+span").css('display', 'block');
					$(this).css('border-bottom', '3px solid #f00');
					shouldEnableVoter[4] = false;
				}
				
			});
		});

	</script>

</body>
</html>

<?php 

	if (isset($_POST['signupbtn'])){
		$fullname = $_POST['flnm'];
		$username = $_POST['usrnm'];
		$email = $_POST['eml'];
		$pass1 = $_POST['pss'];
		$pass2 = $_POST['pssr'];

		if (!empty($fullname) && !empty($username) && !empty($email) && !empty($pass1) && !empty($pass2)) {
			
			if ($pass1 == $pass2) {

				$fullname = ltrim($fullname);
				$fullname = rtrim($fullname);

				$insertinusersquery = "insert into users(username, email, fullname, pass) VALUES('$username', '$email', '$fullname', '$pass1');";
				
				if ($res = mysqli_query($conn, $insertinusersquery)){
					//nothing
				} else {
					echo mysqli_error($conn);
				}
				

			}

		}

	}
	
?>