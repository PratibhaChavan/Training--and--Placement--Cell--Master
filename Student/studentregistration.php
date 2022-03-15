<!DOCTYPE html>
<html>
<head>
<title> Student Registration</title>
<style type="text/css">
	body{
		margin: 0;
	padding: 0;
	background: url("company3.jpg");
	background-size: cover;
	//background-position: center;
	font-family: sans-serif;
	}
	topnav{
			overflow: hidden;
			background-color: #333;

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
	.login-box{
	width: 550px;
	height: 600px;
	background:rgba(0,0,0,0.5);
	background:  #000;
	color: #fff;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 20px 50px;
}
.student{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top: -10%;
	left: calc(50% - 50px);
	}
	h1{
		
	margin: 20px;
	padding: 0 0 -10px;
	text-align: center;
	font-size: 22px;
}
.login-box input[type="submit"],input[type="reset"]
{
	border: none;
	outline: none;
	height: 40px;
	align-items: right;
	width: 150px;
	background: #fb2525;
	color: #fff;
	font-size: 18px;
	border-radius: 20px;
}
.login-box input[type="text"],.login-box input[type="email"],.login-box input[type="tel"],.login-box input[type="year"],input[type="date"],input[type="password"]
{
	width: 250px;
}
.login-box input[type="submit"]:hover
{
	cursor: pointer;
	background: #39dc79;
	color: #101;

}

.login-box input[type="reset"]:hover
{
	cursor: pointer;
	background: #39dc79;
	color: #101;
}
.table{
	margin-top: -120px;
	column-span: 100px;
}
td{
	padding: 10px;
	
}
.select{
	width: 250px;
}
.radio{

}
}
</style>
</head>

<body>
	<?php
	$hn='localhost';
$db='login';
$un='root';
$pw='';
if(isset($_POST['submit']))
{
	$conn=new mysqli($hn,$un,$pw,$db);
	if ($conn->connect_error)die($conn->connect_error) ;
	
		$student_name=$_POST['student_name'];
		$student_password=$_POST['student_password'];
		$email=$_POST['email'];
		$branch=$_POST['branch'];
		$percent=$_POST['percent'];
		$year=$_POST['year'];
		$address=$_POST['address'];
		$mobile=$_POST['mobile'];
		$dob=$_POST['dob'];
		$query="INSERT INTO studentregistration(username,password,email,branch,percent,passyear,address,mobileno,dob) VALUES('$student_name','$student_password','$email','$branch','$percent','$year','$address',$mobile,'$dob')";
		$result=$conn->query($query);

		if (!$result) 
		{
			die("Database access failed:".$conn->error);

		}else
		{
			echo '<script>alert("You are registered please log in.....")</script>';
			header('Location: studentlogin.php');
		}
	
}
?>
		
<div class="topnav"><a class="active" href="../HomePage/home.php">Home</a></div>
<div class="login-box">
<div class="login-box">
	<img src="student.png" class="student">
		<h1>Student Registration</h1>
		<form name="studentregistration"method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
			<table class="table">
			<tr><td>Name</td><td><input type="text" id="student_name" name="student_name" placeholder="Enter Your Nme" required="true"></td></tr><br>
			<tr><td>Password</td><td><input type="password" id="student_password" name="student_password" placeholder="Enter Your Password" required="true"></td></tr><br>
			<tr><td>Email</td><td><input type="Email" id="email" name="email" required="true" placeholder="Enter Your Email"></td></tr><br>
			<tr><td>Branch</td><td><select class="select" id='branch' required="true" name="branch">
				<option value="Diploma in Computer Tech.">Diploma in Computer Tech. </option>
				<option value="MCA">MCA</option>
				<option value="MCS">MCS</option>
				<option value="BCS">BCS</option>
				<option value="IT">IT</option>
				<option value="BE in Comp.Tech.">BE in Comp. Tech.</option>
			</select></td></tr><br>
			<tr><td>Last Year %</td><td><input type="text" id="percent" required="true" name="percent" placeholder="Enter Your previes year percentage"></td></tr><br>
			<tr><td>Passing Year</td><td><input type="year" required="true" id="year" name="year" placeholder="select passing year"></td></tr><br>
			<tr><td>Address</td><td><input type="text" required="true" id="address" name="address" placeholder="Enter Your Address"></td></tr><br>
			<tr><td>Mobile Number</td><td><input type="tel" required="true" id="mobile" name="mobile" placeholder="Enter Your Mobile Number" pattern="[0-9]{3}[0-9]{2}[0-9]{2}[0-9]{3}"></td></tr><br>
			<tr><td>DOB</td><td><input type="date" required="true" id="dob" name="dob" ></td></tr><br>
			<tr><td><input type="Reset"id="reset" name="reset" value="Cancle " align="right" width="150"></td>
			<td align="right"><a href="studentlogin.php"><input type="submit" id="submit" name="submit" value="Login "align="right" ></a></td></tr>
			</table>
		</form>

</div>
</body>
</html>