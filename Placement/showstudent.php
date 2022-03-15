
<style type="text/css">
	body{
		margin:0;
	padding: 0;
	background: url("company3.jpg");
	background-size: cover;
	//background-position: center;
	font-family: sans-serif;
	}
	.table{
		margin-bottom: 200px;
		column-span: 100px;
}
th
{

	background-color:grey;
}
td{
	padding: 10px;
	background-color:pink; 
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
</style>	
<div class="topnav"><a class="active" href="recruiteractivity.php">Home</a></div>
<table border="1" align="center" >
	<tr>
		<th> Name</th>
		<th> Mail ID</th>
		<th>Course</th>
		<th>Percentage</th>
		<th>Pass Year</th>
		<th> Address</th>
		<th> Mobile No</th>
		<th>DOB</th>
		<th>Placement</th>
	</tr>
<?php
	$conn=mysqli_connect('localhost','root','','login');

	if($conn->connect_error)die($conn->connect_error);
	$query = "SELECT  `username`,  `email`, `branch`, `percent`, `passyear`, `address`, `mobileno`, `dob`,`Placement` FROM `studentregistration`";
	$result= $conn->query($query);
	if (!$result)die( "Failed to connect to MYSQL:".$conn->error);  
	
	while ($row=mysqli_fetch_object($result)) {
?>
	<tr>
		<td ><?php echo $row->username ?></td>
		<td><?php echo $row->email ?></td>
		<td><?php echo $row->branch ?></td>
		<td><?php echo $row->percent ?></td> 
		<td><?php echo $row->passyear ?></td>
		<td><?php echo $row->address ?></td>
		<td><?php echo $row->mobileno ?></td>
		<td><?php echo $row->dob ?></td>
		<td><?php echo $row->Placement ?></td>
	
	</tr>
	<?php
	}
	mysqli_free_result($result);
	mysqli_close($conn);
	?>
	</table>
</body>
</html>