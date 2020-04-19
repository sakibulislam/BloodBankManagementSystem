<!DOCTYPE html>
<html>
<body>

<a href="donerpage.php">Go Back</a>

</body>
</html>

		<?php  	
					session_start();
					include("db_conn.php");
					$donner_id='';
						if (isset($_POST["submit"])) {
							$doner_id = $_POST["doner_id"];
						}
				 $sql = "DELETE FROM doner where Donner_ID = '$doner_id' ;";
				$result = $conn->query($sql);

				
							if ($result === TRUE) {
					    echo "Record Deleted successfully";
					} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					}
?>