<!DOCTYPE html>
<html>
<body>

<a href="bloodpage.php">Go Back</a>
</body>
</html>

<?php 
include("php_functions.php");
	session_start();
include("db_conn.php");

	if (isset($_POST["submit"])) {
		$cost = check_data($_POST["Cost"]);
		$code = check_data($_POST["Code"]);
		$type = check_data($_POST["Type"]);
	}
		
$field = '';
$col = '';
 $sql = "UPDATE blood SET Cost = $cost, Code = '$code', Type = '$type' WHERE Code = '$code' ;";
$result = $conn->query($sql);

		if ($result === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>