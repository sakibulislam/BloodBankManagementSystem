<?php 
	include("php_functions.php");
	session_start();
	include("db_conn.php");
	
	$search_error = "";
	$search = "";
	
	if (isset($_POST["submit"])) {
		$search = check_data($_POST["search"]);

		if ($search == "") {
			$search_error = "blood type is required";
			$search = "";
			} else {
		}
		
		if($search_error == ""  )
		{
			// NO errors caught
			include("db_conn.php");

			$query = "select * from blood where type = '{$search}' ;" ;
			
			$result = mysqli_query($connection,$query);
			
			if($result){
				$form_confirmation_message = "blood found successfully";
			}else{
				die("ERROR: connection to database failed");
			}
			
			}else{
			// there were ERRORS
			$form_confirmation_message = "fix the errors and submit the form again";
		}
		
		
	}
?>
<html>
<head>
<title>Profile</title>
<style type = "text/css">
.header
{
color : gray;
font-family : italic;
font-size : 30px;
text-align : center;
}
.table1
{
width : 100%;
text-align : center;
}
.para
{
font-family : tahoma;
font-size : 15px;
position : absolute; 
background-color : red;
color : black;
width : 900px;
left : 50px;
}
</style>
</head>
<body>
<h1 class = "header">Welcome To Your Profile</h1>


				
				
				<?php 
					
					if(!isset($_SESSION["name"]) && isset($_SESSION["message"])){
						echo $_SESSION["message"]. " best of luck!! ";
						unset($_SESSION["message"]);
					}
				?>
				
			</form>
			
		
</body>
</html> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>
			Blood Bank
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style type = "text/css">			
		</style>
		
	</head>
	
	<body>		
	
    <!--Registration Form-->
		
		<?php //the value of each field is going to come from $variables , so that valid fields are not gone if
			// submission fails....

		// if (mysqli_query($conn, $sql)) {
		//     echo " successfully";
		// } else {
		//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		// }

		?>
		 
			<form action="searchcontent.php" method="post">
				
				search for blood : 
				<select type="text" name="search">					
				<?php  		
				$sql = "SELECT distinct Type FROM blood;";
				$result = $conn->query($sql);

				while($row = $result->fetch_assoc()){
					?>				
				 <option value="<?php echo $row['Type'] ?>"><?php echo $row['Type'] ?></option>;
				 <?php 
				  }
				  ?>
				</select>


				<!-- <input type = "VARCHAR" name = "search" value=""  maxlength="300" size = "50px" >
				<span class="error">* <?php // echo $search_error;?></span> -->
				<br /><br />				
				
				<input type ="submit" name="submit" value="submit">
			</form>
		</div>
		<!-- fgs-->
	</body>
</html>	

