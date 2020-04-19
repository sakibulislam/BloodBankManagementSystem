<?php
	include("php_functions.php");
	
	session_start();
	
	$form_confirmation_message = "";
	
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "bloodbank";
	$connection = mysqli_connect($dbhost , $dbuser, $dbpass, $dbname);
	
	$name_error =  $password_error = $phone_number_error = "";
	$name=  $password = $phone_number = "";
	
	if (isset($_POST["submit"])) {
		$name = check_data($_POST["name"]);
		
		$password = check_data($_POST["password"]);
		
		$phone_number = check_data($_POST["phone_number"]);
		
		
		
		if ($name == "") {
			$name_error = "name is required";
			$name = "";
			} else {
		}
		
		if ($password == "") {
			$password_error = "password is required";
			$password = "";
			} else {
		}
		
		if ($phone_number == "") {
			$phone_number_error = "phone_number is required";
			$phone_number = "";
			} else {
		}
		
		
		if($name_error == "" &&  $password_error == "" && $phone_number_error == "" )
		{
			// NO errors caught
			$dbhost = "localhost";
			$dbuser = "root";
			$dbpass = "";
			$dbname = "bloodbank";
			$connection = mysqli_connect($dbhost , $dbuser, $dbpass, $dbname);
			$query = "insert into admin (name,password,phone_number) 
			values ('{$name}',  '{$password}', '{$phone_number}');";
			$result = mysqli_query($connection,$query);
			
			if($result){
				$form_confirmation_message = "new admin added successfully";
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
				name : 
				<input type = "VARCHAR" name = "name" value=""  maxlength="300" size = "50px" >
				<span class="error">* <?php echo $name_error;?></span>
				<br /><br />
				
				
				password :  
				<input type = "password" name = "password" value="" maxlength="15" size = "50pxpx">
				<span class="error">* <?php echo $password_error;?></span>
				<br /><br />
				
				phone_number :  
				<input type = "integer" name = "phone_number" value="" maxlength="15" size = "25pxpx">
				<span class="error">* <?php echo $phone_number_error;?></span>
				<br /><br />
				
				<input type ="submit" name="submit" value="submit">
			</form>
		</div>
		<!---------------------------------------------------------------------------------------->
	</body>
</html>	