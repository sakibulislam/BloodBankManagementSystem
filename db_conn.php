<?php 
$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "bloodbank";
	$conn = mysqli_connect($dbhost , $dbuser, $dbpass, $dbname);

	// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

	?>