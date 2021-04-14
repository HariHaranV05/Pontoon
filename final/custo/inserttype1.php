<?php
SESSION_START();
	if(isset($_POST['submit'] )){
		require('includes/conn.php');
		if(isset($_POST['b1'])){
			$vehicle_type=$_POST['b1'];
			if(isset($_POST['b2'])){
				$prob1=$_POST['b2'];
				$logid=$_SESSION['name'];
				$check=$conn->query("SELECT vehicletype,problem FROM sample WHERE logid='$logid'");
				if($check->num_rows > 0){
					$sql="UPDATE sample SET vehicletype='$vehicle_type', problem='$prob1' WHERE logid='$logid' ";
					if(mysqli_query($conn,$sql)){
						header("Location:../custo/inserttype.php");
						exit();
					}
					else{
						header("Location:../table6.html?sql=error");
						exit();
					}
				}
				else{
					$sql=" INSERT INTO sample (logid,vehicletype,problem) VALUES (?,?,?)";
					$stmt = mysqli_stmt_init($conn);
					if(!mysqli_stmt_prepare($stmt,$sql)){
						header("Location:../table.html?error=sqlerror");
						exit();
					}
					else{
						mysqli_stmt_bind_param($stmt,"sss",$logid,$vehicle_type,$prob1);
						mysqli_stmt_execute($stmt);
						header("Location:../custo/inserttype.php");
						exit();
						}
				}
			}
		}
		if(isset($_POST['b5'])){
			$vehicle_type=$_POST['b5'];
			if(isset($_POST['b2'])){
				$prob1=$_POST['b2'];
				$logid=$_SESSION['name'];
				$check=$conn->query("SELECT vehicletype,problem FROM sample WHERE logid='$logid'");
				if($check->num_rows > 0){
					$sql="UPDATE sample SET vehicletype='$vehicle_type', problem='$prob1' WHERE logid='$logid' ";
					if(mysqli_query($conn,$sql)){
						header("Location:../custo/inserttype.php");
						exit();
					}
					else{
						header("Location:../table6.html?sql=error");
						exit();
					}
				}
				else{
					
					$sql=" INSERT INTO sample (logid,vehicletype,problem) VALUES (?,?,?)";
					$stmt = mysqli_stmt_init($conn);
				
					if(!mysqli_stmt_prepare($stmt,$sql)){
						header("Location:../table1.html?error=sqlerror");
						exit();
					}
					else{
						mysqli_stmt_bind_param($stmt,"sss",$logid,$vehicle_type,$prob1);
						mysqli_stmt_execute($stmt);
						header("Location:../custo/inserttype.php");
						exit();
					}
					
				}
			}
		}
}
