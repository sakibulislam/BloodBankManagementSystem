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
    <th>name</th>
    <th>age</th>
    <th>phone_number</th>
    <th>password</th>
    
  </tr>
  <?php
include("php_functions.php");
	session_start();
include("db_conn.php");

  $sql = "SELECT * FROM client;";
$result = $conn->query($sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	    	?>
  <?php
  echo "
	<tr>
	    <td>".$row["name"]."</td>
	    <td>".$row["age"]."</td>
	    <td>".$row["phone_number"]."</td>
	    <td>".$row["password"]."</td>
	   	    
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
<form action="clientindex.php">
	<input type ="submit" name="add" value="Add">
</form>
<br>
<form action="showclientedit.php">
	<input type ="submit" name="add" value="Update">
</form>
<br>
<form action="showclientdel.php">
	<input type ="submit" name="add" value="Delete">
</form>
</body>
</html>