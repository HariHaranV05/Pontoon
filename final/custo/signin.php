<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/signin.css" />
  </head>
  <body>
  <div class="main">
	<div class="img">
		<img src="img/IMG-20200121-WA0007.png" height="15%" width="15%" />
	</div>
    <div class="form" style="margin-top:-55px;">
		<form name="signin" action="login.php" method="POST">
        <input type="text" name="logid" value="" placeholder="User name" style="background-color:#ffffff;opacity: 0.6; filter: alpha(opacity=60);">
        <input type="text" name="password" value="" placeholder="Password" style="background-color:#ffffff;opacity: 0.6; filter: alpha(opacity=60);">
        <button type="submit" name="b3">Login</button>or
		<button type="button" name="b4"> <a href="signup.html" style="text-decoration:none;color:white;">Sign up</a> </button>
		</form>
		<a href="rest.html" style="color:black;">Forgotten Password?</a>
    </div>
	</div>

	<hr/>
	
  </body>
</html>
