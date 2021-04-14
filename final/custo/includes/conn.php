<?php
	$dbhost="localhost:3306";
	$dbuser="root";
	$dbpass="HariHk5@";
	$dbname="customer";
	
	$conn=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	if(!$conn){
		die("Connection failed: mysqli_error()");
	}