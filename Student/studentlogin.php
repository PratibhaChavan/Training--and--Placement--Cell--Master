<?php
$host="localhost";
$user="root";
$password="";
$db="login";

$conn=mysqli_connect($host,$user,$password,$db);
//mysql_select_db($db);
if (isset($_POST['username'])) {
	$uname=$_POST['username'];
	$password=$_POST['password'];
	$sql="select * from studentregistration where username='".$uname."' AND password='".$password."' limit 1";
	$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)==1) {

		header('Location: studentactivity.php');
	}
	else
	{
		echo "You have entered incorrect password";

		exit();
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title> Login Form</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<div class="topnav"><a class="active" href="../HomePage/home.php">Home</a></div>
<div class="login-box">
	<img src="student.png" class="student">
		<h1> Login Here</h1>
		<form method="POST" action="#">
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter Username">
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password">
			<input type="submit" name="submit" value="Login">
		</form>
</div>
</body>
</html>