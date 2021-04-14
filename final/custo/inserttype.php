<?php
SESSION_START();
	if(isset($_POST['submit'] )){
		require('includes/conn.php');
		$location=$_POST['location'];
		if(isset($_POST['b1'])){
			$vehicle_type=$_POST['b1'];
			if(isset($_POST['b2'])){
				$prob1=$_POST['b2'];
				$logid=$_SESSION['name'];
				$check=$conn->query("SELECT vehicletype,problem FROM sample WHERE logid='$logid'");
				if($check->num_rows > 0){
					$sql="UPDATE sample SET vehicletype='$vehicle_type', problem='$prob1' WHERE logid='$logid' ";
					if(mysqli_query($conn,$sql)){
						header("Location:../custo/inserttype.php");
						exit();
					}
					else{
						header("Location:../table6.html?sql=error");
						exit();
					}
				}
				else{
					$sql=" INSERT INTO sample (logid,vehicletype,problem) VALUES (?,?,?)";
					$stmt = mysqli_stmt_init($conn);
					if(!mysqli_stmt_prepare($stmt,$sql)){
						header("Location:../table.html?error=sqlerror");
						exit();
					}
					else{
						mysqli_stmt_bind_param($stmt,"sss",$logid,$vehicle_type,$prob1);
						mysqli_stmt_execute($stmt);
						header("Location:../custo/inserttype.php");
						exit();
						}
				}
			}
		}
		if(isset($_POST['b5'])){
			$vehicle_type=$_POST['b5'];
			if(isset($_POST['b2'])){
				$prob1=$_POST['b2'];
				$logid=$_SESSION['name'];
				$check=$conn->query("SELECT vehicletype,problem FROM sample WHERE logid='$logid'");
				if($check->num_rows > 0){
					$sql="UPDATE sample SET vehicletype='$vehicle_type', problem='$prob1' WHERE logid='$logid' ";
					if(mysqli_query($conn,$sql)){
						header("Location:../custo/inserttype.php");
						exit();
					}
					else{
						header("Location:../table6.html?sql=error");
						exit();
					}
				}
				else{
					
					$sql=" INSERT INTO sample (logid,vehicletype,problem) VALUES (?,?,?)";
					$stmt = mysqli_stmt_init($conn);
				
					if(!mysqli_stmt_prepare($stmt,$sql)){
						header("Location:../table1.html?error=sqlerror");
						exit();
					}
					else{
						mysqli_stmt_bind_param($stmt,"sss",$logid,$vehicle_type,$prob1);
						mysqli_stmt_execute($stmt);
						header("Location:../custo/inserttype.php");
						exit();
					}
					
				}
			}
		}
if(empty($location)){
	echo"NOTfine";
}
else{
	echo" fine";
}

}
	
?>
<html>
<head>
<title>SMS Send</title>
<style>
	.form{
		text-align:center;
		margin-top:200px;
	}
	.sub{
				background-color:orange;
				padding:8px;
				font-size:15px;
				font-family:calibri;
				border-style:outset;
				border-radius:10px;
			}
</style>
</head>
<body background="img/professional-mechanics-in-brisbane.jpg">
	<form class="form" action="mech.php" method="POST">
		<label style="font-family:calibri;font-size:30px;color:white">Enter Location:</label>
		<input type="text" name="local" placeholder="Enter Location" style="padding:10px;border-radius:10px;background-color:#ffffff;opacity: 0.6; filter: alpha(opacity=60);"/><br/><br/>
		<label style="font-family:calibri;font-size:30px;color:white">Enter login Id:</label>
		<input type="text" name="logid" value="<?php echo"$_SESSION[name]"; ?>" style="padding:10px;border-radius:10px;background-color:#ffffff;opacity: 0.6; filter: alpha(opacity=60);"/><br/><br/>
		<button class="sub" type="submit" name="submit">Submit</button>
	</form>

</body>

</html>


