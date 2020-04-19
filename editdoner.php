<!DOCTYPE html>
<html>
<body>
<a href="donerpage.php">Go_Back</a>
</body>
</html>

<?php 
include("php_functions.php");
	session_start();
include("db_conn.php");

	if (isset($_POST["submit"])) {
		$username = check_data($_POST["username"]);
		$age = check_data($_POST["age"]);
		$phone_number = check_data($_POST["phone_number"]);
		$donner_id = check_data($_POST["donner_id"]);
		$sex = check_data($_POST["sex"]);
		$address = check_data($_POST["address"]);
 }
$field = '';
$col = '';
 $sql = "UPDATE doner SET Username = '$username', Age=$age, Phone_Number=$phone_number, Sex='$sex',Address='$address' WHERE Donner_ID = '$donner_id' ;";
$result = $conn->query($sql);

		if ($result === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>