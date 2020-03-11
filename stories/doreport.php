<?php 
	include("../public/top.php");
	require '../database/conn.php';
	require '../database/sessmanage.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Report</title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');
		.options-container {
			width: 100%;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.options-main {
			width: 300px;
			height: 50px;
			display: flex;
		}
		.input-container {
			width: 50px;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.label-container {
			width: 250px;
			height: 100%;
			display: flex;
			align-items: center;
			font-family: 'Poppins';
		}
		.btn {
			width: 90px;
			height: 40px;
			background-color: red;
			border: none;
			color: white;
			font-size: 18px;
			font-family: 'Poppins';
		}
	</style>
</head>
<body>
	<div class="options-container">
		<form method="post">
			<div class="options-main">
				<div class="input-container"><input type="radio" name="report" value="Spam"></div>
				<div class="label-container">Spam Content</div>
			</div>
			<div class="options-main">
				<div class="input-container"><input type="radio" name="report" value="Sexual"></div>
				<div class="label-container">Sexual Content</div>
			</div>
			<div class="options-main">
				<div class="input-container"><input type="radio" name="report" value="Hateful"></div>
				<div class="label-container">Hateful Content</div>
			</div>
			<div class="options-main">
				<div class="input-container"><input type="radio" name="report" value="Terrorism"></div>
				<div class="label-container">Promotes Terrorism</div>
			</div>
			<div class="options-main">
				<div class="input-container"><input type="radio" name="report" value="Illegal"></div>
				<div class="label-container">Sale of Illegal goods</div>
			</div>
			<div class="options-main">
				<div class="input-container"><input type="radio" name="report" value="Harrasment"></div>
				<div class="label-container">Harrasment</div>
			</div>
			<div class="options-main">
				<div class="input-container"><input type="radio" name="report" value="Scam"></div>
				<div class="label-container">Scam Content</div>
			</div>
			<div class="options-main">
				<div class="input-container"><input type="radio" name="report" value="Fakeinfo"></div>
				<div class="label-container">Fakeinfo Content</div>
			</div>
			<div class="options-main">
				<div class="input-container" style="width: 100%; justify-content: center;"><input type="submit" value="report" name="reportsubmit" class="btn"></div>
			</div>
		</form>
	</div>
</body>
</html>

<?php 
if (isset($_POST['reportsubmit'])) {
	$reportReason = $_POST['report'];
	if ($reportReason != "") {
		if(isset($_SESSION['user'])) {
			$reportBy = $_SESSION['user'];
		} else {
			$reportBy = "annonymous";
		}
		$reportedStory = $_GET['storyid'];
		$addreportquery = "insert into reports (reportedby, reportedstoryid, reportreason) values('$reportBy', $reportedStory, '$reportReason')";
		$res = mysqli_query($conn, $addreportquery);
		if ($res) {
			echo "<script>window.location.href='index.php'</script>";
		} else {
			echo mysqli_error($conn);
		}
	} else {
		echo "<script>alert('atleast select one report to proceed');</script>";
	}
}

?>