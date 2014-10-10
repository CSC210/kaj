<?php
$email= $_POST["email"];
$pwd = $_POST["pwd"];

$dbh=mysqli_connect("localhost",
"zzengnin","Nopointhackingme!128","zzengnin_wheel")
or die ('I cannot connect to the database.');
//echo "connected";

$sql="INSERT INTO Info(id, pw, email, bs) VALUES('3', 
'$pwd', '$email', '7')";

if(!mysqli_query($dbh, $sql)) {

die('Error:' . mysqli_error($dbh));
}
//echo "1 record added";
mysqli_close($dbh);
?>

<html>
<body>

Welcome! Your email is:  <?php echo $_POST["email"]; ?><br>
Your password
 is: <?php echo $_POST["pwd"]; ?>



</body>
</html>

