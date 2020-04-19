<!DOCTYPE html>
<html>
<body>
		<?php  	
					session_start();
					include("db_conn.php");
					$donner_id='';
						if (isset($_POST["submit"])) {

							$phone_number = $_POST["phone_number"];
						}
?>
				<form action="editclient.php" method="post">				
					<?php  						

				 $sql = "SELECT * FROM client where phone_number = $phone_number ;";
				$result = $conn->query($sql);

				while($row = $result->fetch_assoc()){
					?>	
				Name : 
				<input type = "VARCHAR" name = "name" value="<?php echo $row['name'] ?>"  maxlength="25" size = "30px" >
				
				<br /><br />
				age : 
				<input type = "VARCHAR" name = "age" value="<?php echo $row['age'] ?>" maxlength="10" size = "30px" required>
				
				
			
				<input type = "hidden" name = "phone_number" value="<?php echo $row['phone_number'] ?>" maxlength="15" size = "30px">
				
				

				<br /><br />
				Password :  
				<input type = "VARCHAR" name = "password" value="<?php echo $row['password'] ?>" maxlength="50" size = "40px">
				
				<br /><br />
				
				
				 <?php 
				  }
				  ?>
				<input type ="submit" name="submit" value="submit">
			</form>
</body>
</html>