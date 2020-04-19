<!DOCTYPE html>
<html>
<body>
		<?php  	
					session_start();
					include("db_conn.php");
					$donner_id='';
						if (isset($_POST["submit"])) {

							$doner_id = $_POST["doner_id"];
						}
?>
				<form action="editdoner.php" method="post">				
					<?php  						

				 $sql = "SELECT * FROM doner where Donner_ID = '$doner_id' ;";
				$result = $conn->query($sql);

				while($row = $result->fetch_assoc()){
					?>	
				Username : 
				<input type = "VARCHAR" name = "username" value="<?php echo $row['Username'] ?>"  maxlength="20" size = "30px" >
				
				<br /><br />
				Age : 
				<input type = "integer" name = "age" value="<?php echo $row['Age'] ?>" maxlength="20" size = "30px" required>
				
				<br /><br />
				Phone_Number : 
				<input type = "integer" name = "phone_number" value="<?php echo $row['Phone_Number'] ?>" maxlength="15" size = "30px">
				
				<input type = "hidden" name = "donner_id" value="<?php echo $row['Donner_ID'] ?>" maxlength="20" size = "30px">

				<br /><br />
				Sex :  
				<input type = "VARCHAR" name = "sex" value="<?php echo $row['Sex'] ?>" maxlength="7" size = "30px">
				
				<br /><br />
				Address :  
				<input type = "VARCHAR" name = "address" value="<?php echo $row['Address'] ?>" maxlength="30" size = "30px">
				
				<br /><br />
				
				 <?php 
				  }
				  ?>
				<input type ="submit" name="submit" value="submit">
			</form>
</body>
</html>