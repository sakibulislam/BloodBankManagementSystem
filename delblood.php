<!DOCTYPE html>
<html>
<body>

<a href="bloodpage.php">Go Back</a>
</body>
</html>

		<?php  	
					session_start();
					include("db_conn.php");
					$code='';
						if (isset($_POST["submit"])) {
							$code = $_POST["Code"];
						}
				 $sql = "DELETE FROM blood where Code = '$code' ;";
				$result = $conn->query($sql);

				
							if ($result === TRUE) {
					    echo "Record Deleted successfully";
					} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					}
?>