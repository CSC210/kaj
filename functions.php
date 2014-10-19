<?php
// server should keep session data for AT LEAST 10 seconds
ini_set('session.gc_maxlifetime', 10);

// each client should remember their session id for EXACTLY 10 seconds
session_set_cookie_params(10);

//sessions
session_start();

//connect to database
//$dbh=mysqli_connect("localhost",
//"zzengnin","Nopointhackingme!128","zzengnin_wheel")
//or die ('Database is not able to connect');

$dbh = new mysqli("localhost",
"zzengnin","Nopointhackingme!128","zzengnin_wheel");
if ($mysqli->connect_errno)
{
  echo "Database is not able to connect: (" . $mysqli->connect_errno . 
") " . $mysqli->connect_error;
  // dot means concatenate strings
}

//login check function
function loggedin()
{
  $loggedin = FALSE;  
  if(isset($_SESSION['email']) || isset($_COOKIE['email'])) {
    $loggedin = TRUE;
    return $loggedin;
  }
  return $loggedin;
}
?>
