<?php
	$dbhost = "localhost";
	$dbuser = "exxelcom_cpsia";
	$dbpass = "OV~7zKmrY+9TXvJn";
	$dbname = "exxelcom_cpsia";
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
	mysqli_select_db($conn, $dbname) or die('database selection problem');
?>