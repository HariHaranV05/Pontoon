<?php

if(isset($_POST['login'])){
	require 'includes/conn.php';
	$username = $_POST['b1'];
	$password = $_POST['b2'];
	

	if(empty($username) || empty($password)){
		header("those fields can't be empty.");
		exit();
	}	
	else
	{
		$sql = "SELECT * FROM users WHERE logid='".$username."' AND pass='".$pass."' limit 1";
		$result=mysql_query($sql);
		
		if(mysql_num_rows($result)==1){
			$_SESSION['username']=$username;
			$_SESSION['success']="You have successfully logged in!!";
			header('location:index.php');
			
		}
		else{
			echo"You have entered invalid details!!!";
			exit();
		}
	}
}
