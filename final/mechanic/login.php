<?php
	require ('login1.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
	<style>
		h1{
			color:white;
			font-family:calibri;
			margin-top:50px;
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
		.link{
			font-family:calibri;
			text-align:center;
			margin-left:600px;
			font-size:20px;
		}
		.link a{
			text-decoration:underline;
			color:blue;
		}
		.btn{
			background-color:orange;font-family:calibri;color:white;border-radius:5px;font-size:20px;
		}
		
		
		
	</style>
  </head>

 
<body background="img/professional-mechanics-in-brisbane.jpg" style="text-align:center;" >	

	<h1> Welcome to PONTOON</h1>
	
	<form method="POST" action="active.php" >
		<button class="btn" type="submit" value="active" name="b1">Activate</button><br/>
		<button class="btn" type="submit" value="deactive" name="b2">DeActivate</button>
	</form>
	
	<p>   We are here to help you to get relive from your frustrated situation of your vehicle, <br/>
	when you are going out from your native with your vehicle. We simply create a <br/>bridge 
	between you and the your near by mechanic when your vehicle face<br/> puncture or breakdown or someother problems.</p>
	<br/><br/><br/><br/><br/><br/><br/><br/>
	<h3>Contact Info</h3>
	<label class="link"><a href="https://instagram.com/_chill_bro_6?igshid=15u2mjqoj2k9k">Instagram</a> </label><br/>
	<label class="link"><a href="">Facebook</a> </label><br/>
	<label class="link"><a href="">Whatsup-9566524519</a> </label><br/>
</body>

</html>
