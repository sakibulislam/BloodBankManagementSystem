
<!DOCTYPE html>
<html>
<body>


<a href="bloodpage.php">Go Back</a>


</body>
</html>


<?php
	include("php_functions.php");
	
	session_start();
	
	$form_confirmation_message = "";
	
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "bloodbank";
	$connection = mysqli_connect($dbhost , $dbuser, $dbpass, $dbname);
	
	$cost_error = $code_error = $type_error  = "";
	$cost= $code = $type = "";
	
	if (isset($_POST["submit"])) {
		$cost = check_data($_POST["cost"]);
		$code = check_data($_POST["code"]);
		$type = check_data($_POST["type"]);
		
		
		
		if ($cost == "") {
			$cost_error = "Cost is required";
			$cost = "";
			} else {
		}
		if ($code == "") {
			$code_error = "Code is required";
			$code = "";
			} else {
		}
		if ($type == "") {
			$type_error = "Type is required";
			$type_number = "";
			} else {
		}
		
		
		if($cost_error == "" && $code_error == "" && $type_error == "" )
		{
			// NO errors caught
			$dbhost = "localhost";
			$dbuser = "root";
			$dbpass = "";
			$dbname = "bloodbank";
			$connection = mysqli_connect($dbhost , $dbuser, $dbpass, $dbname);
			$query = "insert into blood (cost, code,type) 
			values ('{$cost}', '{$code}' , '{$type}');";
			$result = mysqli_query($connection,$query);
			
			if($result){
				$form_confirmation_message = "entried successfully";
			}else{
				die("ERROR: connection to database failed");
			}
			
			}else{
			// there were ERRORS
			$form_confirmation_message = "fix the errors and submit the form again";
		}
		
		
	}
	
?>


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
	
    <!---------------------------------Registration Form-------------------------------------->
		
		<?php //the value of each field is going to come from $variables , so that valid fields are not gone if
			// submission fails....?>
		
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<?php echo $form_confirmation_message; ?><br />
				Cost : 
				<input type = "integer" name = "cost" value="<?php echo $cost ?>"  maxlength="10" size = "10px" >
				<span class="error">* <?php echo $cost_error;?></span>
				<br /><br />
				Code : 
				<input type = "VARCHAR" name = "code" value="" maxlength="16" size = "30px">
				<span class="error">* <?php echo $code_error;?></span>
				<br /><br />
				Type :  
				<input type = "VARCHAR" name = "type" value="" maxlength="6" size = "7pxpx">
				<span class="error">* <?php echo $type_error;?></span>
				<br /><br />
				
				
				<input type ="submit" name="submit" value="submit">
			</form>
		</div>
		<!---------------------------------------------------------------------------------------->
	</body>
</html>	