<?php
	include("php_functions.php");
	
	session_start();
	
	$form_confirmation_message = "";
	
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "bloodbank";
	$connection = mysqli_connect($dbhost , $dbuser, $dbpass, $dbname);
	
	$phone_no_error = $blood_type_error = $bloodcode_number_error  = "";
	$phone_no = $blood_type = $bloodcode_number = "";
	
	if (isset($_POST["submit"])) {
		$phone_no = check_data($_POST["phone_no"]);
		$blood_type = check_data($_POST["blood_type"]);
		$bloodcode_number = check_data($_POST["bloodcode_number"]);
		
		
		
		if ($phone_no == "") {
			$phone_no_error = "phone_no is required";
			$phone_no = "";
			} else {
		}
		if ($blood_type == "") {
			$blood_type_error = "Blood_type is required";
			$blood_type = "";
			} else {
		}
		if ($bloodcode_number == "") {
			$bloodcode_number_error = "bloodcode_number is required";
			$bloodcode_number = "";
			} else {
		}
	
		
		if($phone_no_error == "" && $blood_type_error == "" && $bloodcode_number_error == ""  )
		{
			// NO errors caught
			$dbhost = "localhost";
			$dbuser = "root";
			$dbpass = "";
			$dbname = "bloodbank";
			$connection = mysqli_connect($dbhost , $dbuser, $dbpass, $dbname);
			$query = "insert into orderlist (phone_no, blood_type,bloodcode_number) 
			values ('{$phone_no}', '{$blood_type}' , '{$bloodcode_number}' );";
			$result = mysqli_query($connection,$query);
			
			if($result){
				$form_confirmation_message = "order placed successfully";
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
				phone_no : 
				<input type = "integer" name = "phone_no" value=""  maxlength="15" size = "25px" >
				<span class="error">* <?php echo $phone_no_error;?></span>
				<br /><br />
				blood_type : 
				<input type = "VARCHAR" name = "blood_type" value="" maxlength="10" size = "20px">
				<span class="error">* <?php echo $blood_type_error;?></span>
				<br /><br />
				bloodcode_number:  
				<input type = "VARCHAR" name = "bloodcode_number" value="" maxlength="15" size = "10pxpx">
				<span class="error">* <?php echo $bloodcode_number_error;?></span>
				<br /><br />
				
				
				
				<input type ="submit" name="submit" value="submit">
			</form>
		</div>
		<!---------------------------------------------------------------------------------------->
	</body>
</html>	