<?php
	$dbhost="localhost:3306";
	$dbuser="root";
	$dbpass="HariHk5@";
	$dbname="mechanics";
	
	$conn1=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	if(!$conn1){
		die("Connection failed: mysqli_error()");
	}