<!DOCTYPE html>
<html>
<head>
<title>Update College Information</title>
<style type="text/css">
	body{
		margin: 0;
	padding: 0;
	background: url("company3.jpg");
	background-size: cover;
	/*background-position:center;*/
	font-family: sans-serif;
	/*background-repeat:no-repeat;*/
	/*height: 100%;
	width: 100%;*/
	}
	.login-box{
	width: 	550px;
	height: 300px;
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
		
	margin: 20px;
	padding: 0 0 -10px;
	text-align: center;
	font-size: 22px;
}
.login-box input[type="submit"]
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
.login-box input[type="text"],input[type="date"]
{
	width: 250px;
}
.login-box input[type="submit"]:hover
{
	cursor: pointer;
	background: #39dc79;
	color: #101;

}
.table{
	margin-top: -50px;
	column-span: 100px;
}
td{
	padding: 10px;
	column-gap: 30px;
	
}
.topnav{
			overflow: hidden;
			/*background-color: #333;*/

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
<body >
	<div class="topnav"><a class="active" href="adminactivity.php">Home</a></div>
<div class="login-box">
		<h1>Update College Info. </h1>
		<form>
			<table class="table">
			<tr><td>Name of College</td><td><input type="text" name="name_of_college" placeholder="Enter your college name" required="true"></td></tr><br>
			<tr><td>Society if any</td><td><input type="text" name="society_if_any" placeholder="society if any"></td></tr><br>
			<tr><td>Recognized By</td><td><input type="text" name="recognized_by" placeholder="recognized_by" required="true"></td></tr><br>
			<tr><td></td><td><input type="submit" name="submit" value="+ADD " align="right"></td></tr>
			</table>
		</form>
</div>
</body>
</html>