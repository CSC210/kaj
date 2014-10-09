<?php
// Create connection
$con=mysqli_connect("localhost","zzengnin@localhost","Nopointhackingme!128","zzengnin_wheel");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>