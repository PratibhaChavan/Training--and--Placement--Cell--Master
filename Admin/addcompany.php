<!DOCTYPE html>
<html>
<head>
<title> Add Company</title>
<style type="text/css">
	body{
		margin: 0;
	padding: 0;
	background: url("company3.jpg");
	background-size: cover;
	//background-position: center;
	font-family: sans-serif;
	}
	.topnav{
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
	height: 400px;
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

	h1{
		
	margin: 30px;
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
.login-box input[type="text"],.login-box input[type="int"],.login-box input[type="salary"]
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
	
		$name=$_POST['company_name'];
		$address=$_POST['address'];
		$placement=$_POST['placement'];
		$min_sal=$_POST['msal'];
		$max_sal=$_POST['mxsal'];
		
		$query="INSERT INTO `addcompany`(`Name`, `Location`, `No_of_Placement`, `Min_Salary`, `Max_salary`) VALUES ('$name','$address','$placement','$min_sal','$max_sal')";
		$result=$conn->query($query);

		if (!$result) 
		{
			die("Database access failed:".$conn->error);

		}else
		{
			echo "Company Added";
		}
	
}
?>
			</script>
<div class="topnav"><a class="active" href="adminactivity.php">Home</a></div>
<div class="login-box">
<div class="login-box">
	
		<h1>ADD COMPANY</h1>
		<form name="studentregistration"method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
			<table class="table">
			<tr><td>Name</td><td><input type="text" id="company_name" name="company_name" placeholder="Enter company name" required="true"></td></tr><br>
			<tr><td>Location</td><td><input type="text" id="address" name="address" placeholder="Enter Your Location" required="true"></td></tr><br>
			<tr><td>No. of Placement</td><td><input type="int" id="placement" required="true" name="placement" placeholder="Enter the number for required employee"></td></tr><br>
			<tr><td>Min. Salary</td><td><input type="salary" required="true" id="msal" name="msal" placeholder="Enter Minimum salary per year"></td></tr><br>
			<tr><td>Max. Salary</td><td><input type="salary" required="true" id="mxsal" name="mxsal" placeholder="Enter Maximum salary per year"></td></tr><br>
			<tr><td><input type="Reset"id="reset" name="reset" value="Cancle " align="right" width="150"></td>
			<td align="right"><a href=""><input type="submit" id="submit" name="submit" value="+Add Company "align="right"></a></td></tr>
			</table>
		</form>
</div>
</body>
</html>
