<?php
	include("php_functions.php");
	
	session_start();
	
	$form_confirmation_message = "";
	
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "bloodbank";
	$connection = mysqli_connect($dbhost , $dbuser, $dbpass, $dbname);
	
	$name_error = $address_error = $phone_number_error  = $employee_id_error = "";
	$name= $address = $phone_number = $employee_id = "";
	
	if (isset($_POST["submit"])) {
		$name = check_data($_POST["name"]);
		$address = check_data($_POST["address"]);
		$phone_number = check_data($_POST["phone_number"]);
		$employee_id = check_data($_POST["employee_id"]);
		
		
		if ($name == "") {
			$name_error = "name is required";
			$name = "";
			} else {
		}
		if ($address == "") {
			$address_error = "address is required";
			$address = "";
			} else {
		}
		if ($phone_number == "") {
			$phone_number_error = "phone_number is required";
			$phone_number = "";
			} else {
		}
		if ($employee_id == "") {
			$employee_id_error = "employee_id is required";
			$employee_id = "";
			} else {
		}
		
		
		if($name_error == "" && $email_id_error == "" && $phone_number_error == "" && $employee_id_error == "" )
		{
			// NO errors caught
			$dbhost = "localhost";
			$dbuser = "root";
			$dbpass = "";
			$dbname = "bloodbank";
			$connection = mysqli_connect($dbhost , $dbuser, $dbpass, $dbname);
			$query = "insert into coordinator (name, address,phone_number,employee_id) 
			values ('{$name}', '{$address}' , '{$phone_number}' , '{$employee_id}');";
			$result = mysqli_query($connection,$query);
			
			if($result){
				$form_confirmation_message = "new user created successfully";
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
				<input type = "VARCHAR" name = "name" value=""  maxlength="50" size = "10px" >
				<span class="error">* <?php echo $name_error;?></span>
				<br /><br />
				address : 
				<input type = "VARCHAR" name = "address" value="" maxlength="25" size = "30px">
				<span class="error">* <?php echo $address_error;?></span>
				<br /><br />
				phone_number :  
				<input type = "integer" name = "phone_number" value="" maxlength="11" size = "7pxpx">
				<span class="error">* <?php echo $phone_number_error;?></span>
				<br /><br />
				employee_id :  
				<input type = "integer" name = "employee_id" value="" maxlength="10" size = "7pxpx">
				<span class="error">* <?php echo $employee_id_error;?></span>
				<br /><br />
				
				
				<input type ="submit" name="submit" value="submit">
			</form>
		</div>
		<!---------------------------------------------------------------------------------------->
	</body>
</html>	