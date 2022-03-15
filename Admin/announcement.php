<!DOCTYPE html>
<html>
<head>
<title> Announcement If Any</title>
<link rel="stylesheet" type="text/css" href="announcement.css">
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
		
		$andate=$_POST['date'];
		$announcement=$_POST['announcement'];
		
		$query="INSERT INTO announcement(adate,announcement) VALUES ('$andate','$announcement')";
		$result=$conn->query($query);

		if (!$result) 
		{
			die("Database access failed:".$conn->error);

		}else
		{
			 echo "Announcement added";
			
		}
	
}
?>

	<div class="topnav"><a class="active" href="adminactivity.php">Home</a></div>
<div class="login-box">
		<h1>Add Announcement</h1>
		<form  action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
			<table class="table">
			<tr><td>Date</td><td><input type="date" name="date" required="true"></td></tr><br>
			<tr><td>Note</td><td><textarea rows="4" cols="30" name="announcement" placeholder="Write Announcement" required="true"></textarea> </td></tr><br>
			<tr><td></td><td><input type="submit" name="submit" value="+ADD " align="right"></td></tr>
			</table>
		</form>
</div>
</body>
</html>