<?php
// 数据库连接地址： bdm298555274.my3w.com	114.116.85.131:3306
// 数据库名称： bdm298555274_db	lifu
// 数据库用户名： bdm298555274		1261334745
    header("Content-type:text/html;charset=utf-8");

    class sqlUtils{
    /**
     * 获取连接
     * @return mysqli
     */
    function getCon(){
        $con = new mysqli("114.116.85.131:3306", "lifu", "1261334745", "lifu");
        $con->query('set names utf8;');
        return $con;
    }
    /**
     * 关闭连接
     * @param unknown $conn
     */
    function close($con){
        mysqli_close($con);
    }
    
}

$sql = new sqlUtils();
$con = $sql->getCon();
$resurt = $con->query("select * from user");
$user = mysqli_fetch_array($resurt,MYSQLI_ASSOC);
echo $user['name'];
