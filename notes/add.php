<?php 
	include("../public/top.php");
	require '../database/conn.php';
	require '../database/sessmanage.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Personal Notes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/add.css">
	<script type="text/javascript" src="../assets/jquery.js"></script>
</head>
<body>
	<?php
		if (!isset($_SESSION['user'])){
			header("location: ../account/signin.php");
		} else {
		include '../public/header.php';
	?>


	<section class="add-note-container">
		<section class="form-container">
			<form method="post">
				
				<input type="text" class="inp" placeholder="Title of note" name="nttl">

				<textarea class="inp" placeholder="Note" name="ntdl" data-usage="notem"></textarea>

				<input type="text" class="inp" placeholder="Tags of note seprated by comma(,)" name="nttg" data-usage="ntags">

				<button type="submit" name="sbmtn" class="btn">
					Add Note
				</button>
			</form>
		</section>
	</section>


	<?php
		include '../public/footer.php';
	}
	?>

	<script type="text/javascript">

		$(document).ready(function(){

			$("input[data-usage='ntags']").on("input", function(){

				$(this).val($.trim($(this).val()));

			});

		});
		
	</script>

</body>
</html>

<?php 

	function replace_character($str){
		$temp = str_split($str);
		for($r = 0; $r < count($temp); $r++) {
			if ($temp[$r] == "<") {
				$temp[$r] = "&lt;";
			} 
			if ($temp[$r] == ">") {
				$temp[$r] = "&gt;";
			}
		}
		return implode("", $temp);
	}
	
	if (isset($_POST['sbmtn'])) {

		$title = $_POST['nttl'];
		$note = $_POST['ntdl'];
		$tags = trim($_POST['nttg']);

		if (!empty($title) && !empty($note) && !empty($tags)) {

			$title = replace_character($title);
			$note = replace_character($note);
			$tags = replace_character($tags);
			$noteuser = $_SESSION['user'];
			$title = mysqli_real_escape_string($conn, $title);
			$note = mysqli_real_escape_string($conn, $note);
			$tags = mysqli_real_escape_string($conn, $tags);
			$insertinnotesquery = "INSERT INTO notes(noteuser, notetitle, notedata, notetags, dttm) VALUES ('$noteuser', '$title', '$note', '$tags', now())";
				
			if ($res = mysqli_query($conn, $insertinnotesquery)){
				// header("location: index.php");
				echo "<script>window.location.href='index.php'</script>";
			} else {
				// echo mysqli_error($conn);
			}

		} else {
			echo "<script>alert('please fill in all fields')</script>";
		}

	}

?>