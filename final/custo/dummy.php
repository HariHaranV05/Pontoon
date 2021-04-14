<?php
	require ('includes/conn1.php');
	
	$result=mysqli_query($conn1,"SELECT * FROM mechanic");
	echo"<table border='1'>
	<tr>
	<th>Id</th>
	<th>Name</th>
	<th>Shop name</th>
	<th>addr</th>
	<th>logid</th>
	<th>mobnum</th>
	<th>veh_typ</th>
	<th>tow</th>
	<th>wrk_hrs</th>
	<th>pass</th>
	<th>send</th>
	<tr/>";
	
	while($row=mysqli_fetch_array($result)){
		echo"<form name='f1' action='message.php' method='post'>";
		echo"<tr>";
		echo"<td>".$row['id']."</td>";
		echo"<td>".$row['name']."</td>";
		echo"<td>".$row['shop_name']."</td>";
		echo"<td>".$row['addr']."</td>";
		echo"<td>".$row['logid']."</td>";
		echo"<td><input type='text' name='s1' value=".$row['mobnum']."></td>";
		echo"<td>".$row['veh_typ']."</td>";
		echo"<td>".$row['tow']."</td>";
		echo"<td>".$row['wrk_hrs']."</td>";
		echo"<td>".$row['pass']."</td>";
		echo"<td> <button type='submit' name='sub'>submit</button> </td>";
		echo"</form>";
		echo"<tr/>";
	}
	echo"<table/>";
	
		
?>