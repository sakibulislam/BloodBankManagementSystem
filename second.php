<?php 
	
	session_start();
	
?>
<html>
<head>
<title>Home Page</title>
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
background-color : black;
color : white;
width : 900px;
left : 50px;
}
</style>
</head>
<body>
<h1 class = "header">Welcome To Blood Bank</h1>
<table class = "table1" cellpadding = ".5px" cellspacing = ".75px" border = ".5px">

<div class = "log" id="login_box" style="display:<?php echo $display ?>">
			<form action="login_process.php" method="post">
				
				Username : 
				<input type = "text" name = "name" value="" size = "30px">
				<br /><br />
				Password : 
				<input type = "password" name = "password" value="" size = "30px"><br /><br />
				<input type = "submit" name="submit" value ="submit"><br />
				<?php 
					
					if(!isset($_SESSION["name"]) && isset($_SESSION["message"])){
						echo $_SESSION["message"]. " best of luck!! ";
						unset($_SESSION["message"]);
					}
				?>
				
			</form>
			<br />
			not a member <a href ="#.php">sign up</a> here
			<br />
			click here to login as <a href = "#.php">admin</a>
		</div>
</body>
</html>