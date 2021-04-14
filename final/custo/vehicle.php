<?php
	require ('logid.php');
?>
<html>
	<head>
		<title>Problem Identification</title>
		<style>
			h2{
				
				margin-top:60px;
				color:green;
				font-family:calibri;
				
				font-size:40px;	
			}
			.vehicle1{
				
				
				margin-top:20px;
				color:white;
				font-family:calibri;
				font-size:40px;
				
			}
			
			.vehicle2{
				
				
				color:white;
				font-family:calibri;
				font-size:40px;
				
			}
			.option{
				width:200px;
				font-family:calibri;
				font-size:20px;
				font-weight:bold;
				
				
			}
			.select{
				color:green;
				
				margin-top:-10px;
				font-family:calibri;
				font-size:40px;
			}
			.sub{
				background-color:orange;
				padding:8px;
				font-size:15px;
				font-family:calibri;
				border-style:outset;
				border-radius:10px;
			}
			.two{
				text-align:center;
			}
		
		</style>
	</head>
<body background="img/professional-mechanics-in-brisbane.jpg" style="background-repeat: no-repeat;background-size:100% 100%;">
	<form class="two" action="inserttype.php" method="POST">
		<h2 class="h3">Vehicle Type</h2>
		<label class="vehicle1">TwoWheeler </label><input type="checkbox" name="b1" value="Twowheeler" /><BR/><P style="color:white;font-size:20px;">OR</P>
		<label class="vehicle2">FourWheeler</label><input type="checkbox" name="b5" value="Fourwheeler" /><br/>
		<br/><h2 class="h3">Problem Type</h2>
		<select name="b2" class="option">
			<option value="Puncture">Puncture</option>
			<option value="DeadBattery">DeadBattery</option>
			<option value="Sparkplug">Sparkplug</option>
			<option value="Brake Issues">Brake Issues</option>
			<option value="ChainProblem">Chainproblem</option>
			<option value="Other">Others</option>
		</select><br/><br/><br/>		
		<button class="sub" type="submit" name="submit">Submit</button>
	</form>
</body>
</html>