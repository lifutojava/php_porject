<?php
require_once 'config.php';

class sqlUtils{
    /**
     * 获取连接
     * @return mysqli
     */
    function getCon(){
        $con = new mysqli(HOST, NAME, PASSWORD, DBNAME);
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

// $sql = new sqlUtils();
// $con = $sql->getCon();
// $resurt = $con->query("select * from user where name = 'lifu' and password = 123 ");
// // $users = $resurt
// foreach ($resurt as $var){
//     echo $var;
// }
