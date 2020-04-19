<!DOCTYPE html>
<html>
<body>

<a href="donerpage.php">Go Back</a>


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
	
	$username_error = $age_error = $phone_number_error = $donner_id_error = $sex_error = $address_error = "";
	$username = $age = $phone_number = $donner_id = $sex = $address = "";
	
	if (isset($_POST["submit"])) {
		$username = check_data($_POST["username"]);
		$age = check_data($_POST["age"]);
		$phone_number = check_data($_POST["phone_number"]);
		$donner_id = check_data($_POST["donner_id"]);
		$sex = check_data($_POST["sex"]);
		$address = check_data($_POST["address"]);
		
		
		if ($username == "") {
			$username_error = "Name is required";
			$username = "";
			} else {
		}
		if ($age == "") {
			$age_error = "Age is required";
			$age = "";
			} else {
		}
		if ($phone_number == "") {
			$phone_number_error = "Phone Number is required";
			$phone_number = "";
			} else {
		}
		if ($donner_id == "") {
			$donner_id_error = "Donner_ID is required";
			$donner_id = "";
			} else {
		}
		if ($sex == "") {
			$sex_error = "Sex is required";
			$sex = "";
			} else {
		}
		if ($address == "") {
			$address_error = "Address is required";
			$address = "";
			} else {
		}

		
		if($username_error == "" && $age_error == "" && $phone_number_error == "" && $donner_id_error == "" && $sex_error == "" && $address_error == "")
		{
			// NO errors caught
			$dbhost = "localhost";
			$dbuser = "root";
			$dbpass = "";
			$dbname = "bloodbank";
			$connection = mysqli_connect($dbhost , $dbuser, $dbpass, $dbname);
			$query = "insert into doner (username, age,phone_number,donner_id,sex,address) 
			values ('{$username}', '{$age}' , '{$phone_number}', '{$donner_id}' , '{$sex}' , '{$address}');";
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
				Username : 
				<input type = "VARCHAR" name = "username" value="<?php echo $username ?>"  maxlength="20" size = "30px" >
				<span class="error">* <?php echo $username_error;?></span>
				<br /><br />
				Age : 
				<input type = "integer" name = "age" value="" maxlength="20" size = "30px" required>
				<span class="error">* <?php echo $age_error;?></span>
				<br /><br />
				Phone_Number :  
				<input type = "integer" name = "phone_number" value="" maxlength="15" size = "30px">
				<span class="error">* <?php echo $phone_number_error;?></span>
				<br /><br />
				Donner_ID :  
				<input type = "integer" name = "donner_id" value="" maxlength="20" size = "30px">
				<span class="error">* <?php echo $donner_id_error;?></span>
				<br /><br />
				Sex :  
				<input type = "VARCHAR" name = "sex" value="" maxlength="7" size = "30px">
				<span class="error">* <?php echo $sex_error;?></span>
				<br /><br />
				Address :  
				<input type = "VARCHAR" name = "address" value="" maxlength="30" size = "30px">
				<span class="error">* <?php echo $address_error;?></span>
				<br /><br />
				
			
				<input type ="submit" name="submit" value="submit">
			</form>
		</div>
		<!---->
	</body>
</html>	