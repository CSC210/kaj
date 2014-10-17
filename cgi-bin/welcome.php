<?php
$email= $_POST["email"];
$pwd = $_POST["password"];

$dbh=mysqli_connect("localhost",
"zzengnin","Nopointhackingme!128","zzengnin_wheel")
or die ('Database is not able to connect');

$qry= "SELECT email FROM Info WHERE email=? AND pw=?'";

if ($stmt = mysqli_prepare($link, qry)) {
	mysqli_stmt_bind_param($stmt, "ss", $email, $pwd);
	mysqli_stmt_bind_execute($stmt);
	
	mysqli_stmt_bind_result($stmt, $result);
	
}



if(mysqli_num_rows($result)>0)
{
	echo "Welcome! '$email', you are officially logged in! ";
}
else{
	echo "Your Email or Password is WRONG!!!!";
}

mysqli_close($dbh);
?>

<!-- 

<?php
$email= $_POST["email"];
$pwd = $_POST["password"];

$dbh=mysqli_connect("localhost",
"zzengnin","Nopointhackingme!128","zzengnin_wheel")
or die ('Database is not able to connect');

$qry= "SELECT email FROM Info WHERE email='$email' AND pw='$pwd'";
$result = mysqli_query($dbh,$qry);

if(mysqli_num_rows($result)>0)
{
	echo "Welcome! '$email', you are officially logged in! ";
}
else{
	echo "Your Email or Password is WRONG!!!!";
}

mysqli_close($dbh);
?>
 -->


<!-- 


<?php
$email= $_POST["email"];
$pwd = $_POST["password"];
// for MAMP
$dbh=mysqli_connect("localhost",
"root","root","zzengnin_wheel")
or die ('Database is not able to connect');

$qry= "SELECT email FROM Info WHERE email='$email' AND pw='$pwd'";
$result = mysqli_query($dbh,$qry);

if(mysqli_num_rows($result)>0)
{
	echo "Welcome! '$email', you are officially logged in! ";
}
else{
	echo "Your Email or Password is WRONG!!!!";
}

mysqli_close($dbh);
?>
 -->


