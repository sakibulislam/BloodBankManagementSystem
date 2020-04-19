<?php 
session_start();
include("php_functions.php");
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "bloodbank";
$connection = mysqli_connect($dbhost , $dbuser, $dbpass, $dbname);


if(isset($_POST["submit"])){
	
	$username = check_data($_POST["username"]); // email can be used also....
	$password = check_data($_POST["password"]);
	
	$query = "select * from admin where (name='{$username}') and password='{$password}';";
	$result = mysqli_query($connection,$query);
	$row_number = mysqli_num_rows ($result);
	
	if($row_number  == 1){ 
	
		$row =  mysqli_fetch_assoc($result);
		if($username == $row["name"] && $password == $row["password"]){
			$_SESSION["username"] = $username;
			header("Location: adminpage.php");
			$_SESSION["message"] = "{$username}, you are logged in as admin";
			
		}
	}else{
		$_SESSION["message"] = "Username and Password do not match";
		header("Location: index.php");
	}
	
	
}


exit;

?>