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
    <th>phone_no</th>
    <th>blood_type</th>
    <th>bloodcode_number</th>
    
    
  </tr>
  <?php
include("php_functions.php");
	session_start();
include("db_conn.php");

  $sql = "SELECT * FROM orderlist;";
$result = $conn->query($sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	    	?>
  <?php
  echo "
	<tr>
	    
	    <td>".$row["phone_no"]."</td>
	    <td>".$row["blood_type"]."</td>
      <td>".$row["bloodcode_number"]."</td>
	   	    
	  </tr>
  ";
	      
	    }
	} else {
	    echo "0 results";
	}

mysqli_close($conn);
?>

</table>