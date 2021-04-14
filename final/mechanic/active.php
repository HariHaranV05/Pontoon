<?php
	require('includes/conn1.php');
	SESSION_START();
	$name=$_SESSION['name'];
	echo "$name";
	if(isset($_POST['b1'])){
		$btn=$_POST['b1'];
		$check=$conn1->query("SELECT state FROM mechanic WHERE logid='$name'");
		if($check->num_rows > 0){
			$sql="UPDATE mechanic SET state='$btn' WHERE logid='$name' ";
			if(mysqli_query($conn1,$sql)){
				header("Location:../mechanic/new.php");
				exit();
			}
			else{
				header("Location:../table6.html?sql=error");
				exit();
			}
		}
	}
	if(isset($_POST['b2'])){
		$btn=$_POST['b2'];
		$check=$conn1->query("SELECT state FROM mechanic WHERE logid='$name'");
		if($check->num_rows > 0){
			$sql="UPDATE mechanic SET state='$btn' WHERE logid='$name' ";
			if(mysqli_query($conn1,$sql)){
				header("Location:../mechanic/new1.php");
				exit();
			}
			else{
				header("Location:../table6.html?sql=error");
				exit();
			}
		}
	}

?>