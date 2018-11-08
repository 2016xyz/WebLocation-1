<?php
  $con = new mysqli("localhost","root","");
  if (!$con) {
    die('Could not connect: ' . mysql_error());
  } else {
    echo "ok";
  }
  $username = $_POST["username"];
  $password = $_POST["password"];
  echo $username ." ". $password;
?>