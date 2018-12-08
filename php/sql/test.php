<?php
include "connect-sql.php";
include "class/UserInfo.php";

$sql->exec("
  CREATE TABLE IF NOT EXISTS user_data (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL UNIQUE KEY,
    password VARCHAR(30) NOT NULL,
    info TEXT,
    location TEXT
  );
");

$obj = new UserInfo();
$obj->setSex("男6666");

echo json_encode($obj, JSON_UNESCAPED_UNICODE); 
?>