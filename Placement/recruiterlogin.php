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
	$sql="select * from loginform where user='".$uname."' AND pass='".$password."' limit 1";
	$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)==1) {
		echo "You have successfully login";
		header('Location: Recruiteractivity.php');
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
	<title> REcruiter Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		.topnav{
			overflow: hidden;
			/*background-color: #333;*/

		}
		body{
			background: url("company3.jpg");
	 		background-size: cover;
		}
		.topnav a{
			float: left;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration:none;
			font-size: 17px;
			}
		.topnav a:hover{
			background-color: #ddd;
			color: black;
		}
		.topnav a.active{
			background-color: #4CAF50;
			color: white;
		}

	</style>
</head>

<body>
	<div class="topnav"><a class="active" href="../HomePage/home.php">Home</a></div>
<div class="login-box">
	<img src="student.png" class="student">
		<h1> Login Here</h1>
		<form method="POST" action="#">
			<p>Username</p>
			<input type="text" name="username" id="username" placeholder="Enter Username">
			<p>Password</p>
			<input type="password" name="password" id="password" placeholder="Enter Password">
			<input type="submit" name="submit" value="Login" >
		</form>
</div>
</body>

</html>
