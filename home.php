<?php
session_start();

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
	<h1>Student Registration</h1>
</div>
<h1>HOME</h1>
<div><h4> Welcome <?php echo $_SESSION['username']; ?></h4></div>
</body>
</html>