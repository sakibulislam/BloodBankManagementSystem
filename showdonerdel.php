<!DOCTYPE html>
<html>
<body>
<form action="deldoner.php" method="post">
				
				Choose  Doner:
				<select type="text" name="doner_id">					
				<?php  	
					session_start();
					include("db_conn.php");

				$sql = "SELECT * FROM doner;";
				$result = $conn->query($sql); 

				while($row = $result->fetch_assoc()){
					?>				
				 <option value="<?php echo $row['Donner_ID'] ?>"><?php echo $row['Username']." ". $row['Age'] ." ".
				 $row['Phone_Number']." ".$row['Donner_ID']." ".$row['Sex']." ".$row['Address']
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

