<!DOCTYPE html>
<html>
<body>
		<?php  	
					session_start();
					include("db_conn.php");
					$donner_id='';
						if (isset($_POST["submit"])) {

							$code = $_POST["Code"];
						}
?>
				<form action="editblood.php" method="post">				
					<?php  						

				 $sql = "SELECT * FROM blood where Code = '$code';";
				$result = $conn->query($sql);

				while($row = $result->fetch_assoc()){
					?>	
				Cost : 
				<input type = "integer" name = "Cost" value="<?php echo $row['Cost'] ?>"  maxlength="10" size = "30px" >
				
				<br /><br />
				Code : 
				<input type = "hidden" name = "Code" value="<?php echo $row['Code'] ?>" maxlength="16" size = "30px" required>
				
				<br /><br />
				Type : 
				<input type = "VARCHAR" name = "Type" value="<?php echo $row['Type'] ?>" maxlength="15" size = "30px">
				
				
				
				
				
				
				 <?php 
				  }
				  ?>
				<input type ="submit" name="submit" value="submit">
			</form>
</body>
</html>