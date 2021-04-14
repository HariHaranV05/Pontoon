<?php
	if(isset($_POST['su'])){
		require 'conn.php';
		
		$fname=$_POST['b1'];
		$lname=$_POST['b2'];
		$email=$_POST['b3'];
		$logid=$_POST['b4'];
		$mobnum=$_POST['b5'];
		$pass=$_POST['b6'];
		
		if(empty($fname) || empty($lname) || empty($email) || empty($logid) || empty($mobnum) || empty($pass))
		{
			header("Location: ../signup.php?error=emptyfields&uid=".$fname."$mail=".$email);
			exit();
		}
		else{
		$sql= "SELECT logid FROM users WHERE logid=?";
		$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("Location:../signup.php?error=sqlerror");
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
					
					$sql=" INSERT INTO users (fname,lname,email,logid,mobnum,pass) VALUES (?,?,?,?,?,?) ";
					$stmt = mysqli_stmt_init($conn);
					if(!mysqli_stmt_prepare($stmt,$sql)){
						header("Location:../signup.php?error=sqlerror");
						exit();
					}
					else{
						mysqli_stmt_bind_param($stmt,"ssssss",$fname,$lname,$email,$logid,$mobnum,$pass);
						mysqli_stmt_execute($stmt);
						header("Location:../home.php");
						exit();
					}
				}
			}
			mysqli_stmt_close($stmt);
			mysqli_close($conn);
			
		}
	}
	else{
		header("Locatin../Signup.php");
		exit();
	}
	
