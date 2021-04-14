<?php
	session_start();
	session_unset();
	session_destroy();
	require ('signin.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Home</title>
	<style>
		h1{
			color:white;
			font-family:calibri;
			margin-left:450px;
			margin-top:110px;
			text-shadow:3px 4px red;
			font-size:50px;
		}
		h3{
			
			border-style:outset;
			margin-right:520px;
			font-size:30px;
			font-family:calibri;
			margin-left:510px;
			border-radius:10px;
			border-color: orange;
			background-color:orange;
			padding: 10px 30px 10px 30px;
			text-align:center;
		}
		p{
			margin-top:80px;
			color:white;
			margin-right:200px;
			font-family:calibri;
			font-size:20px;
			margin-left:230px;
			border-style:groove;
			text-align:center;
		}
		
	</style>

  </head>

<body background="img/professional-mechanics-in-brisbane.jpg">
	<h1> Welcome to PONTOON</h1> 
	
	
	<p>   We are here to help you to get relive from your frustrated situation of your vehicle, <br/>
	when you are going out from your native with your vehicle. We simply create a <br/>bridge 
	between you and the your near by mechanic when your vehicle face<br/> puncture or breakdown or someother problems.</p>
	<br/><br/><br/><br/><br/><br/><br/><br/>
	
</body>
</html>
