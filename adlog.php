<?php 
	
	session_start();
	
?>
<html>
<head>
<title>Home Page</title>
<style type = "text/css">
.header
{
color : red;
font-family : italic;
font-size : 40px;
text-align : center;
}
.table1
{
width : 100%;
text-align : center;
}
.para
{
font-family : Times New Roman;
font-size : 18px;
position : absolute; 
background-color : red;
color : black;
width : 900px;
left : 50px;
}
.log
{
position : absolute;
background-color : blue;
right : 10px;
}
</style>
</head>
<body>
<h1 class = "header">Welcome To BloodBank</h1>
<table class = "table1" cellpadding = ".5px" cellspacing = ".75px" border = ".5px">
<tr>
<td><a href = "index.php">Home </a></td>

</tr>
</table>
<p class = "para">About the hojoborolo bloodbank <br /> This is the biggest bloodbank of Bangladesh </p>

<div class = "log" id="login_box" style="display:<?php echo $display ?>">
			<form action="adlogin_process.php" method="post">
				
				Username : 
				<input type = "text" name = "username" value="" size = "30px">
				<br /><br />
				Password : 
				<input type = "password" name = "password" value="" size = "30px"><br /><br />
				<input type = "submit" name="submit" value ="submit"><br />
				<?php 
					
					if(!isset($_SESSION["username"]) && isset($_SESSION["message"])){
						echo $_SESSION["message"]. " best of luck";
						unset($_SESSION["message"]);
						
					}
				?>
				
			</form>
			
		</div>
</body>
</html>