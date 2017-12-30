<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      <li><a href="index3.php">Home</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
    <?php
    $_SESSION['username']="dani900";
    echo $_SESSION['username'];

    if(!isset($_SESSION['username'])){
      echo "You are not logged in";
    }else{
      echo "You are logged in";
    }
     ?>
  </body>
</html>
