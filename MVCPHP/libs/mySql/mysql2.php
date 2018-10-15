<?php
/*
 * mysqli
 * 数据库地址，登陆账号，密码，数据库名称
 */
// $mysqli = new mysqli("localhost", "root", "", "student");
// $sql = "SELECT * FROM tb_user";
// $result = $mysqli->query($sql);
// $row = $result->fetch_assoc(); // 从结果集中取得一行作为关联数组
// echo $row["password"];
// /* free result set */
// $result->free();

// /* close connection */
// $mysqli->close();


/*
 * 第一个参数是mysql:host,第二是dbname,第三个账户名，第四个密码
 */
try {
    $pdo = new PDO("mysql:host=localhost;dbname=michael_qubit", "root", "");
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
$sql = "select * from tb_user";
echo $sql . "";
$pdo->query('set names utf8;');
$result = $pdo->query($sql);
// $rows = $result->fetchAll();
// foreach ($rows as $row) {
//     $username = $row[1];
//     $pwd = $row[2];
//     echo $username;
// }
?>