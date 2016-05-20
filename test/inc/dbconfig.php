<?php
	$dbhost = "localhost";
	$dbuser = "tinyassb_admin";
	$dbpass = "0{EU)7kH]m[f";
	$dbname = "tinyassb_cpsia";
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
	mysqli_select_db($conn, $dbname) or die('database selection problem');
?>