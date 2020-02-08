<?php 
	
	$host = "localhost";
	$username = "root";
	$pss = "";
	$database = "epic";

	$conn = mysqli_connect($host, $username, $pss, $database);

	if(!$conn) {
		die("Error in connection ".mysql_error());
	}

?>