<!DOCTYPE html>
<html>
<body>

<a href="clientpage.php">Go Back</a>

</body>
</html>

		<?php  	
					session_start();
					include("db_conn.php");
					$phone_number='';
						if (isset($_POST["submit"])) {
							$phone_number = $_POST["phone_number"];
						}
				 $sql = "DELETE FROM client where phone_number = $phone_number ;";
				$result = $conn->query($sql);

				
							if ($result === TRUE) {
					    echo "Record Deleted successfully";
					} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					}
?>