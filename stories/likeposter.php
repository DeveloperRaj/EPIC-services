<?php 

	require '../database/conn.php';
	require '../database/sessmanage.php';

	if (isset($_SESSION['user'])) {

		$user = $_SESSION['user'];
		$storyid = $_POST['sid'];
		$likeVal = $_POST['like'];

		if ($likeVal == 1) {
			$addLikequery = "insert into storylikes values('$storyid', '$user')";
			$res = mysqli_query($conn, $addLikequery);
			// if ($res) 
			// 	echo "like added successfully";
			// else 
			// 	echo mysqli_error($conn);
		} 

		if ($likeVal == -1) {
			$reomveLikeQuery = "delete from storylikes where storyid = '$storyid' AND likeby = '$user'";
			$res = mysqli_query($conn, $reomveLikeQuery);
			// if ($res) 
			// 	echo "like removed successfully";
			// else 
			// 	echo mysqli_error($conn);
		}

		$likeCounterQuery = "select * from storylikes where storyid = '$storyid'";
		$res = mysqli_query($conn, $likeCounterQuery);
		$totalLikes = mysqli_num_rows($res);
		echo "$totalLikes";

	} else {

		header("location: ../account/signin.php");

	}
	
?>