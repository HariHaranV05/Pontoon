<?php
SESSION_START();
$name=$_SESSION['varname'];
if($_SESSION['loggedin'] == true){
	echo "<h3>Welcome ,".$name."!</h3>";
}
?>
<html>
<head>
	<style>
		.button{
		margin-left:1280px;
		margin-top:-57px;
		}
		h3{
			color:white;
			font-family:calibri;
			text-shadow:3px 4px red;
			font-size:30px;
			text-align:center;
		}
	</style>
</head>
<body>
<img src="img/IMG-20200121-WA0007.png" style="margin-left:-1200px;margin-top:-65px;" alt="pontoon" width="10%" height="7%" />
	<form class="button" action="logout.php">
		<button type="submit" name="logout" style="background-color:orange;font-family:calibri;color:white;border-radius:5px;font-size:12px;">Logout</button>
	</form>
	<hr/>
</body>
</html>