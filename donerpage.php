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
    <th>Username</th>
    <th>Age</th>
    <th>Phone_Number</th>
    <th>Donner_ID</th>
    <th>Sex</th>
    <th>Address</th>
  </tr>
  <?php
include("php_functions.php");
	session_start();
include("db_conn.php");

  $sql = "SELECT  * FROM doner;";
$result = $conn->query($sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	    	?>
  <?php
  echo "
	<tr>
	    <td>".$row["Username"]."</td>
	    <td>".$row["Age"]."</td>
	    <td>".$row["Phone_Number"]."</td>
	    <td>".$row["Donner_ID"]."</td>
	    <td>".$row["Sex"]."</td>
	    <td>".$row["Address"]."</td>	    
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
<form action="donerindex.php">
	<input type ="submit" name="add" value="Add">
</form>
<br>
<form action="showdoneredit.php">
	<input type ="submit" name="add" value="Update">
</form>
<br>
<form action="showdonerdel.php">
	<input type ="submit" name="add" value="Delete">
</form>
</body>
</html>
