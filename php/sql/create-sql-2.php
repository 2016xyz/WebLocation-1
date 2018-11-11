<?php
$server = "localhost";
$user = "root";
$passwd = "";
$db = "UserData";

//创建连接
$conn = new mysqli($server, $user, $passwd, $db);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}else{
  echo "链接成功";
}

$sql = "CREATE TABLE positiondata (
    username VARCHAR(30) NOT NULL,
    Longitude DOUBLE(6,6),
    latitude DOUBLE(6,6)
)";
 
if ($conn->query($sql) === TRUE) {
    echo "创建成功";
} else {
    echo "创建数据表错误: " . $conn->error;
}
 
$conn->close();
?>