<!DOCTYPE html>
<html>
<body>
<a href="clientpage.php">Go Back</a>
</body>
</html>

<?php 
include("php_functions.php");
	session_start();
include("db_conn.php");

	if (isset($_POST["submit"])) {
		$name = check_data($_POST["name"]);
		$age = check_data($_POST["age"]);
		$phone_number = check_data($_POST["phone_number"]);
		$password = check_data($_POST["password"]);
		
 }
$field = '';
$col = '';
 $sql = "UPDATE client SET name = '$name', age='$age', phone_number=$phone_number, password='$password' WHERE phone_number = $phone_number ;";
$result = $conn->query($sql);

		if ($result === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}