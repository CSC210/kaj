<?php
  include 'functions.php';
  

if(!loggedin())
  {
    header("Location: login.php");
    exit();
  }
?>

<p>You're in ther user area.</p>
<a href="logout.php">Log out</a>
