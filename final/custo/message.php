<?php
		$mo=$_POST['s1'];
		$db1 = new mysqli("localhost","root","HariHk5@","customer");
		if($db1 -> connect_errno){
			echo "Failed to connect to MYSQL:".$db1->connect_errno;
			exit();
		}
		if($result = $db1->query("SELECT fname,mobnum FROM users WHERE logid='Thivan5'")){
			$row = mysqli_fetch_array($result);
			$m= $row['mobnum'];
			$n= $row['fname'];
		}
		if($result = $db1->query("SELECT vehicletype,problem FROM sample WHERE logid='Thivan5'")){
			$row = mysqli_fetch_array($result);
			$v= $row['vehicletype']; 
 			$p= $row['problem'];
		}
//post
$url="https://www.sms4india.com/api/v1/sendCampaign";
$message = urlencode("Name:$n,
Number:$m,
Vehicle:$v,
Problem:$p");
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=MQHCHA3UCVLSUMWYZZ1GZAWX7LS3XR2E&secret=XJRESQN1YJBB4WBE&usetype=stage&phone=7010951190&senderid=harihk56789@gmail.com&message=$message");
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
//echo $result;
$db1->close();
?>
<html>
<head>
	<title>Mechanic details</title>
	<script>		
	function load(){
		setTimeout("window.open('http://localhost/final/custo/mech1.php','_self');",120000);
	}
</script>
</head>
<body onload="load()" background="img/professional-mechanics-in-brisbane.jpg">

<h2 style="text-align:center;margin-top:200px;font-family:calibri;font-size:30px;color:white;"> Please wait for a Mechanic Response for a few minutes!!!<br/> Otherwise the page will Redirected To previuos page in few minutes!!!!</h2>
	
</body>
</html>