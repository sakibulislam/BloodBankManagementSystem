<!DOCTYPE html>
<html>
<body>
<form action="editbloodinfo.php" method="post">
				
				Choose Edit Bloodinfo:
				<select type="text" name="Code">					
				<?php  	
					session_start();
					include("db_conn.php");

				$sql = "SELECT * FROM blood;";
				$result = $conn->query($sql);

				while($row = $result->fetch_assoc()){
					?>				
				 <option value="<?php echo $row['Code'] ?>"><?php echo $row['Cost']." ". $row['Type'] 
				
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

