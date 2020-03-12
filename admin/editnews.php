<?php 
	require '../database/conn.php';
	require '../database/sessmanage.php';

	if (!isset($_SESSION['user'])) {
		echo "<script>window.location.href='../'</script>";
	} else {
		if ($_SESSION['user'] !== "admin") {
			echo "<script>window.location.href='../'</script>";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/addnews.css">
	<link rel="stylesheet" href="styles/loader.css">
	<script src="../assets/jquery.js"></script>
</head>
<body>
	<section id="loader">Loading...</section>

	<section id="main">
		<?php include 'header.php'; ?>
		<section class="admin-container">
			<?php 
				include 'sidebar.php';
			?>
			<section class="main-pannel">
				<?php 
					if (isset($_GET['newsid'])) {
						$newsid = $_GET['newsid'];
						$selectNewsDataQuery = "select * from news where newsid = '$newsid'";
						$res = mysqli_query($conn, $selectNewsDataQuery);
						$row = mysqli_fetch_array($res);
						$title = $row['newstitle'];
						$data = $row['newsdata'];
						$tags = $row['newstags'];
					}
				?>
				<section class="pannel-header">Edit NEWS</section>
				<form method="post">
					<input type="text" class="inp" placeholder="Title" name="ntitle" value="<?= $title ?>">

					<textarea class="inp" placeholder="News" name="ndata"><?= $data ?></textarea>

					<input type="text" class="inp" placeholder="Tags seprated by comma(,)" name="ntags" data-usage="stags" value="<?= $tags ?>">

					<button type="submit" class="btn" name="updatenews">
						Save Changes
					</button>
				</form>
			</section>
		</section>
	</section>

	<script type="text/javascript">

		$(document).ready(function(){
			$("input[data-usage='stags']").on("input", function(){
				$(this).val($.trim($(this).val()));
			});
		});
		
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			loader.style.display = "none";
			main.style.display = "block";
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
	
	if (isset($_POST['updatenews'])) {

		$title = $_POST['ntitle'];
		$news = $_POST['ndata'];
		$tags = trim($_POST['ntags']);

		if (!empty($title) && !empty($news) && !empty($tags)) {

			$title = replace_character($title);
			$news = replace_character($news);
			$tags = replace_character($tags);
			$title = mysqli_real_escape_string($conn, $title);
			$news = mysqli_real_escape_string($conn, $news);
			$tags = mysqli_real_escape_string($conn, $tags);

  			$updateNewsQuery = "INSERT INTO news(newstitle, newsdata, newstags) VALUES ('$title', '$news', '$tags')";
			
			if ($res = mysqli_query($conn, $updateNewsQuery)){
				echo "<script>window.location.href='managenews.php'</script>";
			} else {
				echo mysqli_error($conn);
			}  

		} else {
			echo "<script>alert('please fill in all fields')</script>";
		}

	}

?>