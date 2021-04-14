<?php
if(isset($_POST['su'])){
		require ('conn1.php');
		
		$name=$_POST['b1'];
		$shop_name=$_POST['b2'];
		$addr=$_POST['b3'];
		$logid=$_POST['b4'];
		$mobnum=$_POST['b5'];
		$veh_typ=$_POST['r1'];
		$tow=$_POST['r2'];
		$wrk_hrs=$_POST['r3'];
		$pass=$_POST['b6'];
		$local=$_POST['b8'];
		
		if(empty($name) || empty($shop_name) || empty($addr) || empty($logid) || empty($mobnum) || empty($veh_typ) || empty($tow) || empty($wrk_hrs) || empty($pass) || empty($local))
		{
			header("Location: ../signup.php?error=emptyfields&uid=".$fname."$mail=".$email);
			exit();
		}
		else{
			$sql= "SELECT logid FROM mechanic WHERE logid='$logid'";
			$stmt = mysqli_stmt_init($conn1);
			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("Location:../signup1.php?error=sqlerror");
				exit();
			}
			else {
				mysqli_stmt_bind_param($stmt,"s",$logid);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck = mysqli_stmt_num_rows($stmt);
				if($resultCheck>0){
					header("Location:../signup?user already taken");
					exit();
				}
				else{
					$sql="INSERT INTO mechanic (name,shop_name,addr,logid,mobnum,veh_typ,tow,wrk_hrs,pass,location) VALUES (?,?,?,?,?,?,?,?,?,?)";
					$stmt = mysqli_stmt_init($conn1);
					if(!mysqli_stmt_prepare($stmt,$sql)){
						header("Location:../signup2.php?error=sqlerror");
						exit();
					}
					else{
						mysqli_stmt_bind_param($stmt,"ssssssssss",$name,$shop_name,$addr,$logid,$mobnum,$veh_typ,$tow,$wrk_hrs,$pass,$local);
						mysqli_stmt_execute($stmt);
						header("Location:../home.php?signup=success");
						exit();
					}
				}
			}
			mysqli_stmt_close($stmt);
			mysqli_close($conn1);
			
		}
	}
	else{
		header("Locatin../Signup.php");
		exit();
	}
		
			