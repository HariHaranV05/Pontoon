<?php
	SESSION_START();
	require ('includes/conn1.php');
	$location=$_POST['local'];
	$logid=$_SESSION['name'];
	$result1=mysqli_query($conn1,"INSERT INTO local (logid,location) VALUES ('$logid','$location')");
	$result=mysqli_query($conn1,"SELECT * FROM mechanic WHERE location='$location' AND state='active'");
	echo"<h3>Mechanic Details in your Area</h3>";
	echo"<table border='1' align='center'>
	<tr>
	<th>Name</th>
	<th>Shop name</th>
	<th>Address</th>
	<th>MobileNumber</th>
	<th>Vehicle Type</th>
	<th>Towing Facility</th>
	<th>Working Hours</th>
	<th>Select</th>
	<tr/>";
	
	while($row=mysqli_fetch_array($result)){
		echo"<form name='f1' action='message.php' method='post'>";
		echo"<tr>";
		echo"<td>".$row['name']."</td>";
		echo"<td>".$row['shop_name']."</td>";
		echo"<td>".$row['addr']."</td>";
		echo"<td><input type='text' name='s1' value=".$row['mobnum']."></td>";
		echo"<td>".$row['veh_typ']."</td>";
		echo"<td>".$row['tow']."</td>";
		echo"<td>".$row['wrk_hrs']."</td>";
		echo"<td> <button type='submit' name='sub' style='background-color:orange;font-size:15px;font-family:calibri;border-style:outset;'>Book</button> </td>";
		echo"</form>";
		echo"<tr/>";
	}
	echo"<table/>";
?>
<html>
<head>
	<title>Mechanic Details</title>
	<style>
		table{
			font-family:calibri;
			border-radius:8px;
		}
		h3{
			text-align:center;
			font-family:calibri;
			font-size:30px;
		}
		.sub{
				background-color:orange;
				padding:8px;
				font-size:15px;
				font-family:calibri;
				border-style:outset;
				border-radius:10px;
			}
	</style>
</head>
<body>
	
	
</body>

</html>