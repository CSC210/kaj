<!DOCTYPE html>
<head><title>Wheel Sharing</title>
<link rel = "stylesheet" type = "text/css" href = "CSS/style.css">
</head>
<body>
<h1>Log in</h1>

<?php

include 'functions.php';

if (loggedin())
{
        header("Location: userarea.php");
        exit();
} 

// if user clicks login button
if ($_POST['login']) 
{
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        $rememberme = $_POST['rememberme'];

if($email&&$pwd)
{
  $qry= "SELECT *  FROM Info WHERE email='$email'";
  $login = mysqli_query($dbh,$qry);

  while ($row = mysqli_fetch_assoc($login))
  {
   	$db_password=$row['pw'];
        if(md5($pwd) == $db_password)
        {
		echo "true";
           $loginok = TRUE;
        } else {

           $loginok = FALSE;
        }

	if ($loginok == TRUE)
        {
          if ($rememberme == "on")
          {
            setcookie("email", $email, time() + 60*60*24*14);
          } else {
          // set session variable 
            $_SESSION['email']=$email;
          }
          header("Location: userarea.php");
          exit();
        } else {
          //die("Incorrect username and/or password.\n");
          //header("Location: userarea.php");
         }
  }

}
else
{
//die("Please enter a user email and password.");
//exit();
}
}

?> 

<!--
<!DOCTYPE html>
<head><title>Wheel Sharing</title>
<link rel = "stylesheet" type = "text/css" href = "CSS/style.css">
</head>
<body>

<h1>Log in</h1>-->

<form action="login.php" method="POST">
Email:  <input name="email" type="text" size="20" value="<?php echo
$_COOKIE["email"] ?>"/>
<br/>
Password: <input name="password" type="password" value="<?php echo
$_COOKIE["password"] ?>" />
<br/>
<input type="submit" name="login" value="Log in"/> <input type="reset"
value="Reset"/><br/>
<?php
//include 'functions.php';

if ($_POST['login']) 
{
  echo "Incorrect email or password.<br/>";
} 
?>
<input type="checkbox" name="rememberme"/>Stay logged in for more than 
10 seconds and at least 2 
weeks.<br/>

<!--<a href="cgi-bin/remove.php">Remove username and password.</a>
-->

</form>
<br/>
<div>If you don't have an account,<a
href="http://zzeng9.rochestercs.org/kaj/signup.html">create an
account.</a></div>

