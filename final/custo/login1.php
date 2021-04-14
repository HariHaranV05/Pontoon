<?php
SESSION_START();
$DATABASE_HOST = 'localhost:3306';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'HariHk5@';
$DATABASE_NAME = 'customer';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

 
if ( !isset($_POST['logid'], $_POST['password']) ) {
	
	die ('Please fill both the username and password field!');
}


if ($stmt = $con->prepare('SELECT id, pass FROM users WHERE logid = ?')) {

	$stmt->bind_param('s', $_POST['logid']);
	$stmt->execute();

	$stmt->store_result();
	
	if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $pass);
	$stmt->fetch();


	if ($_POST['password'] == $pass) {
		$_SESSION['loggedin'] = true;
		$_SESSION['timeout'] = time();
		$_SESSION['name'] = $_POST['logid'];
		$name=$_SESSION['name'];
	} 
	else {
		header("Location:../custo/pass.php");
		exit();
	}
} else {
	header("Location:../custo/user.php");
	exit();
}

	$stmt->close();
}
?>
<html>
<head>
	<style>
		.button{
		margin-left:1280px;
		margin-top:-57px;
		}
		h2{
			color:white;
			font-family:calibri;
			text-shadow:3px 4px red;
			font-size:30px;
		}
	</style>
</head>
<body>
<?php	
		
		if(isset($_SESSION['loggedin'])&&($_SESSION['loggedin']==true)){
		
		echo "<h2>Welcome ,".$name."!</h2>";
	}
?>
<img src="img/IMG-20200121-WA0007.png" style="margin-left:-1200px;margin-top:-65px;" alt="pontoon" width="10%" height="7%" />
	<form class="button" action="logout.php">
		<button type="submit" name="logout" style="background-color:orange;font-family:calibri;color:white;border-radius:5px;font-size:12px;">Logout</button>
	</form>
	<hr/>
</body>
</html>