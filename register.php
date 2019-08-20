<?php
session_start();
$db=mysqli_connect("localhost","root","","imsankeerth");
if(isset($_POST['sub']))
{
	session_start();
	$username=mysql_real_escape_string($_POST['username']);
	$email=mysql_real_escape_string($_POST['email']);
	$password=mysql_real_escape_string($_POST['password']);
	$password2=mysql_real_escape_string($_POST['password2']);
   

   if($password == $password2)
   {
      $password=md5($password);
      $sql="INSERT INTO students(username,email,password) VALUES('$username,'$email','$password')";
      mysqli_query($db,$sql);
      $_SESSION['message']="Your are now Logged in.";
      $_SESSION['username']=$username;
      header("location: home.php");
   }
   else
   {
   	$_SESSION['message']="The passwords doesnt match.";

   }



}
?>
<!DOCTYPE html>
<html>
<head>
 <title> Register</title>
 <style type="text/css">
 	body
{
	padding:0px;
	margin:0px;
}
.header
{
	background-color: #1A3333;
	color:white;
	text-align: center;
	top: 0px;
	width: 100%;
	padding: 5px;

}
form{
	width: 40%;
	padding: 30px;
	border:1px solid #cbcbcb;
	margin: 5px auto;
}
.textInput
{
	margin-top:2px;
	height:28px;
	border: 1px solid #5E6E66;
	font-size: 16px;
	padding: 1px;
	width: 100%;
}
#error_msg{
	width: 50%;
	margin: 5px auto;
	height: 30px;
	border: 1px solid #FF0000;
	background: #FFB9B8;
	color: #FF0000;
	text-align: center;
	padding-top: 10px;
}
td
{
	text-align: right;
}
 </style>
</head>
<body>
<div class="header">
	<h1>Regsiter,login and input user php mysql</h1>
</div>
<form method="post" action="register.php">
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" class="textInput"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" class="textInput"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" class="textInput"></td>
		</tr>
		<tr>
			<td>Retype Password:</td>
			<td><input type="password" name="password2" class="textInput"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="sub" value="Register"></td>
		</tr>
	</table>
</form>
</body>
</html>