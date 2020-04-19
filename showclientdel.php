<!DOCTYPE html>
<html>
<body>
<form action="delclient.php" method="post">
				
				Choose Client:
				<select type="text" name="phone_number">					
				<?php  	
					session_start();
					include("db_conn.php");

				$sql = "SELECT * FROM client;";
				$result = $conn->query($sql); 

				while($row = $result->fetch_assoc()){
					?>				
				 <option value="<?php echo $row['phone_number'] ?>"><?php echo $row['name']." ". $row['age'] ." ". $row['phone_number'] ." ". 
				 $row['password']
				   ?></option>;
				 <?php 
				  }
				  ?>
				</select>


				<!-- <input type = "VARCHAR" name = "search" value=""  maxlength="300" size = "50px" >
				<span class="error">* <?php // echo $search_error;?></span> -->
				<br /><br />				
				
				<input type ="submit" name="submit" value="submit">
			</form>

</body>
</html>

