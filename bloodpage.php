

<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<a href="adminpage.php">Go Back</a>

<table>
  <tr>
    <th>Cost</th>
    <th>Code</th>
    <th>Type</th>
  </tr>
  <?php
include("php_functions.php");
	session_start();
include("db_conn.php");

  $sql = "SELECT  * FROM blood;";
$result = $conn->query($sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	    	?>
  <?php
  echo "
	<tr>
	    <td>".$row["Cost"]."</td>
	    <td>".$row["Code"]."</td>
	    <td>".$row["Type"]."</td>   
	  </tr>
  ";
	      
	    }
	} else {
	    echo "0 results";
	}

mysqli_close($conn);
?>

</table>
<br>
<form action="bloodindex.php">
	<input type ="submit" name="add" value="Add">
</form>
<br>
<form action="showbloodedit.php">
	<input type ="submit" name="add" value="Update">
</form>
<br>
<form action="showblooddel.php">
	<input type ="submit" name="add" value="Delete">
</form>
</body>
</html>
