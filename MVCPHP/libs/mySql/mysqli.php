<?php
$db_host = 'bdm298555274.my3w.com';
$db_name = 'bdm298555274_db';
$db_user = 'bdm298555274';
$db_pwd = '1261334745';

//面向对象方式
$mysqli = new mysqli($db_host, $db_user, $db_pwd, $db_name);
//面向对象的昂视屏蔽了连接产生的错误，需要通过函数来判断
if(mysqli_connect_error()){
    echo mysqli_connect_error();
}
//设置编码
$mysqli->set_charset("utf8");//或者 $mysqli->query("set names 'utf8'")
//关闭连接
//$mysqli->close();

//面向过程方式的连接方式

//$mysqli = mysqli_connect($db_host, $db_user, $db_pwd, $db_name);
//判断是否连接成功
if(!$mysqli ){
    echo mysqli_connect_error();
}


//无结果集示例
$sql = "select * from user";
$result = $mysqli->query($sql);
//或者
// $sql = "delete from table_name where name='xiaoming'";
// $result = $mysqli->query($sql);

if($result === false){
    echo $mysqli->error;
    echo $mysqli->errno;
}
//影响条数
echo $mysqli->num_rows;
//插入的id
echo $mysqli->insert_id;
//$mysqli->close();

//关闭连接
//mysqli_close($mysqli);
?>