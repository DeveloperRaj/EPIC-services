<?php 
	include("../public/top.php");
	require '../database/conn.php';
	require '../database/sessmanage.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Stories</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/open.css">
	<script src="../assets/jquery.js"></script>
</head>
<body>
	<section id="loader">
		Loading...
	</section>

	<section id="openContainer">

		<?php
			include '../public/header.php';
		?>

		<section class="open-container">
			<?php 

				if (!isset($_GET['storyid'])) {
					header("location: index.php");
				} else {
					$selectstoryopen = "select * from stories where storyid =".$_GET['storyid'];
					$res = mysqli_query($conn, $selectstoryopen);
					$checkData = mysqli_num_rows($res);
					if ($checkData == 1){
						$row = mysqli_fetch_array($res);
						$storyid = $row['storyid'];
						$storyuser = $row['storyuser'];
						$storytitle = $row['storytitle'];
						$storydata = $row['storydata'];
						$thumbnail = $row['thumbnail'];
						$uploaddate = $row['dttm'];
						$editPath = "href=edit.php?storyid=$storyid";
						$deletePath = "href=delete.php?storyid=$storyid";
					} else {
						header("location: index.php");
					}
				}

			?>
			<section class="open-title">&bull;<?= $storytitle ?></section>
			<section class="thumbnail"><img src="thumbnails/<?= $thumbnail ?>"></section>
			<section class="open-main"><pre><?= $storydata ?></pre></section>
			<section class="controls">
				<?php 
					if (!isset($_SESSION['user'])) {
				?>
						<button style="border:none" class="ctrl-btn" disabled="true">Login to like the content</button>
				<?php
					} else { 
						$user = $_SESSION['user'];
						$checkLikequery = "select * from storylikes where storyid = '$storyid' AND likeby = '$user'";
						$res = mysqli_query($conn, $checkLikequery);
						$checkRows = mysqli_num_rows($res);
						$likeCounterQuery = "select * from storylikes where storyid = '$storyid'";
						$res = mysqli_query($conn, $likeCounterQuery);
						$totalLikes = mysqli_num_rows($res);
						if ($checkRows == 1) {
							$likeval = "data-like='-1'";
							$likeText = "Unlike";
						} else {
							$likeval = "data-like='1'";
							$likeText = "Like";
						}
				?>
						<button style="border:none" class="ctrl-btn" id="like" <?= $likeval ?>><?= $likeText ?>(<?= $totalLikes ?>)</button>

				<?php } ?>

				<a style="background-color: red" href="#" class="ctrl-btn">Report</a>
				<?php 
					if (isset($_SESSION['user']) && $_SESSION['user'] === $storyuser) {
				?>
					<a <?= $editPath ?> class="ctrl-btn">Edit</a>
					<a <?= $deletePath ?> class="ctrl-btn">Delete</a>
				<?php } ?>
			</section>
		</section>

		<?php 
			include '../public/footer.php';
		?>
		
	</section>

	<script>
		window.onload = function(){
			loader.style.display = "none";
			openContainer.style.display = "block";
		}

		var getUrlParameter = function getUrlParameter(sParam) {
		    var sPageURL = window.location.search.substring(1),
		        sURLVariables = sPageURL.split('&'),
		        sParameterName,
		        i;

		    for (i = 0; i < sURLVariables.length; i++) {
		        sParameterName = sURLVariables[i].split('=');

		        if (sParameterName[0] === sParam) {
		            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
		        }
		    }
		};

		$(document).ready(function(){
			$("#like").on("click", function(){
				let likeVal = Number($("#like").attr("data-like"));
				let storyid = Number(getUrlParameter('storyid'));
				$.ajax({
					type: "POST",
					url: "likeposter.php",
					data: {
						like: likeVal,
						sid: storyid
					},
					success: (data) => {
						if (likeVal == 1) {
							$("#like").text(`Unlike(${data})`);
						}
						else {
							$("#like").text(`Like(${data})`);
						}
						likeVal = (likeVal == 1) ? -1 : 1;
						$("#like").attr("data-like", String(likeVal));
					}
				});
			});
		});
	</script>
</body>
</html>