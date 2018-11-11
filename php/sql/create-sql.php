<?php
$server = "localhost";
$user = "root";
$passwd = "";
$database = "UserData";
 
// 创建连接
$conn = new mysqli($server, $user, $passwd);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}else{
  echo "链接成功";
}


// 创建数据库
$sql = "CREATE DATABASE UserData";
if (mysqli_query($conn, $sql)) {
    echo "数据库创建成功";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

//-------------------------------------------------------- 
//再次创建连接
$conn = new mysqli($server, $user, $passwd, $database);

 $sql = "CREATE TABLE UserData (
    id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    username VARCHAR(30) NOT NULL,
    userpasswd VARCHAR(30) NOT NULL
)";
 
if ($conn->query($sql) === TRUE) {
    echo "创建成功";
} else {
    echo "创建数据表错误: " . $conn->error;
}
 
$conn->close();
?>