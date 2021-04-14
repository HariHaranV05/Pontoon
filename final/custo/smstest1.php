<?php
		$logid=$_POST['logid'];
		$location=$_POST['location'];
		echo"$location";
		$db1 = new mysqli("localhost","root","HariHk5@","customer");
		$db2 = new mysqli("localhost","root","HariHk5@","mechanics");
		if($db1 -> connect_errno){
			echo "Failed to connect to MYSQL:".$db1->connect_errno;
			exit();
		}
		if($result = $db1->query("SELECT fname,mobnum FROM users WHERE logid='$logid'")){
			$row = mysqli_fetch_array($result);
			$m= $row['mobnum'];
			$n= $row['fname'];
			echo "$m,$n";
		}
		if($result = $db1->query("SELECT vehicletype,problem FROM sample WHERE logid='$logid'")){
			$row = mysqli_fetch_array($result);
			$v= $row['vehicletype']; 
 			$p= $row['problem'];
			echo "$v,$p";
		}
		if($result = $db2->query("SELECT mobnum,state FROM mechanic WHERE location='$location' AND state='active'")){
			$row = mysqli_fetch_array($result);
			$mm= $row['mobnum'];
			$s= $row['state'];
			echo "$mm,$s";
			if($s != "active"){
				echo "Mechanic not in active state";
			}
			
		}
//post
$url="https://www.sms4india.com/api/v1/sendCampaign";
$message = urlencode("Name:$n, Number:$m,Vehicle:$v,Problem:$p");// urlencode your message
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=MQHCHA3UCVLSUMWYZZ1GZAWX7LS3XR2E&secret=XJRESQN1YJBB4WBE&usetype=stage&phone=$mm&senderid=harihk56789@gmail.com&message=$message");// post data
// query parameter values must be given without squarebrackets.
// Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
echo $result;
$db1->close();
$db2->close();
?>