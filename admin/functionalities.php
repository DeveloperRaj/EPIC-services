<?php 

	require '../database/conn.php';
	require '../database/sessmanage.php';

	function warnUser($conn, $user, $reason, $resolving, $reportid) {
		$checkNumOfWarns = mysqli_fetch_array(mysqli_query($conn, "select warns from banstatus where username = '$user'"));
		if ($checkNumOfWarns['warns'] >= 2) {
			banUser($conn, $user, $reason, $resolving, $reportid);
		} else {
			$warnUserQuery = "update banstatus set warns = warns + 1 where username = '$user'";
			$res = mysqli_query($conn, $warnUserQuery);
			if ($res) {
				if ($resolving == true) {
					$resolveReportQuery = "update reports set isresolved = 1 where reportid = $reportid";
					$rres = mysqli_query($conn, $resolveReportQuery);
					if ($rres) {
						echo "User has been warned and report has been resolved";
					}
				} else {
					echo "User has been warned";
				}
			} else {
				echo "Warning unsuccessfull";
			}
		}
	}

	function banUser($conn, $user, $reason, $resolving, $reportid) {
		$banUserQuery = "update banstatus set isbanned = 1, banreason = '$reason' where username = '$user'";
		$res = mysqli_query($conn, $banUserQuery);
		if ($res) {
			if ($resolving == true) {
				$resolveReportQuery = "update reports set isresolved = 1 where reportid = $reportid";
				$rres = mysqli_query($conn, $resolveReportQuery);
				if ($rres) {
					echo "User has been banned and report has been resolved";
				}
			} else {
				echo "User has been banned";
			}
		} else {
			echo "Banning unsuccessfull";
		}
	}

	function deleteUser($conn, $user) {
		$deleteUserQuery = "delete from users where username = '$user'";
		$res = mysqli_query($conn, $deleteUserQuery);
		if ($res) {
			echo "User has been deleted";
		} else {
			echo "Deleting unsuccessfull";
		}
	}

	function deleteNews($conn, $newsid) {
		$deleteNewsQuery = "delete from news where newsid = $newsid";
		$res = mysqli_query($conn, $deleteNewsQuery);
		if ($res) {
			echo "News has been removed";
		} else {
			echo "Deleting unsuccessfull";
		}
	}

	function privateStory($conn, $storyid, $resolving, $reportid) {
		$privateStoryQuery = "update stories set ispublic = 0 where storyid = $storyid";
		$res = mysqli_query($conn, $privateStoryQuery);
		if ($res) {
			if ($resolving == true) {
				$resolveReportQuery = "update reports set isresolved = 1 where reportid = $reportid";
				$rres = mysqli_query($conn, $resolveReportQuery);
				if ($rres) {
					echo "Story has been privated and report has been resolved";
				}
			} else {
				echo "Story has been set private";
			}
		} else {
			echo "Privating unsuccessfull";
		}
	}

	if (isset($_POST['task'])) {
		$task = $_POST['task'];
		$connection = $conn;
		if ($task == 1) {

			$user = $_POST['username'];
			$reason = $_POST['reason'];
			$resolving = $_POST['resolving'];
			$reportid = $_POST['rid'];
			warnUser($connection, $user, $reason, $resolving, $reportid);

		} else if ($task == 2) {

			$user = $_POST['username'];
			$reason = $_POST['reason'];
			$resolving = $_POST['resolving'];
			$reportid = $_POST['rid'];
			banUser($connection, $user, $reason, $resolving, $reportid);

		} else if ($task == 3) {

			$user = $_POST['username'];
			deleteUser($connection, $user);

		} else if ($task == 4) {

			$storyid = $_POST['sid'];
			$resolving = $_POST['resolving'];
			$reportid = $_POST['rid'];
			privateStory($connection, $storyid, $resolving, $reportid);

		} else if ($task == 5) {

			$newsid = $_POST['nid'];
			deleteNews($connection, $newsid);

		}
	}
	
?>