<?php
$sql = null;
$host = "localhost";
$username = "root";
$password = "";
$dbname = "web_location";

try {
  $sql = new PDO("mysql:host={$host};", $username, $password);
  $sql->exec("CREATE DATABASE IF NOT EXISTS {$dbname};"); //创建网站数据库
  
  $sql = new PDO("mysql:host={$host};dbname={$dbname};", $username, $password, array(PDO::ATTR_PERSISTENT => true));
} catch (PDOException $e) {
 die($e->getMessage());
}
?>