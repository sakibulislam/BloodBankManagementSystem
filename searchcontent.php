<?php
include("php_functions.php");
	session_start();
include("db_conn.php");

if (isset($_POST["submit"])) {
	 $search = $_POST["search"];
  $sql = "SELECT  Code, Cost, Type FROM blood where Type = '$search'";
$result = $conn->query($sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        echo "Cost: " . $row["Cost"]. " Code: " . $row["Code"]. " " . $row["Type"]. "<br>";
	    }
	} else {
	    echo "0 results";
	}
}
mysqli_close($conn);
?>



<!DOCTYPE html>
<html>
<body>
<form action="order.php">
	<input type ="submit" name="submit" value="Order">
</form>
</body>
</html>
