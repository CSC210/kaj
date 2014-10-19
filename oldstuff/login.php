
<!DOCTYPE html>
<head><title>Wheel Sharing</title>
<link rel = "stylesheet" type = "text/css" href = "CSS/style.css">
</head>
<body>
<h1>Log in</h1>

<form action="cgi-bin/welcome2.php" method="post">
Email:  <input name="email" type="text" size="20" value="<?php echo
$_COOKIE["email"] ?>"/>
<br/>
Password: <input name="password" type="password" value="<?php echo
$_COOKIE["password"] ?>" />
<br/>
<input type="submit" value="Login"/> <input type="reset"
value="Reset"/><br/>
<input type="checkbox" name="ch1" value="ch"/>Remember username and
password.<br/>

<!--<a href="cgi-bin/remove.php">Remove username and password.</a>
-->

</form>

<div>If you don't have an account,<a
href="http://zzeng9.rochestercs.org/kaj/signup.html">create an
account.</a></div>



</body>
</html>
