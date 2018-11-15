<?php
$host = "localhost";
$username = "root";
$password = "";

try {
  $sql = new PDO("mysql:host={$host};", $username, $password, array(PDO::ATTR_PERSISTENT => true));
} catch (PDOException $e) {
 die($e->getMessage());
}
?>