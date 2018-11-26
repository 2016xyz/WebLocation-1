<?php
include "connect-sql.php";

$sql->exec("
  CREATE TABLE IF NOT EXISTS user_data (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL
  );
");
?>