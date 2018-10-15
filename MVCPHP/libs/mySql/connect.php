<?php
// 数据库连接地址： bdm298555274.my3w.com	114.116.85.131:3306
// 数据库名称： bdm298555274_db	lifu
// 数据库用户名： bdm298555274		1261334745
    header("Content-type:text/html;charset=utf-8");

    if (function_exists('mysql_connect')) {
        echo 'Mysql扩展已经安装';
    }
    if($con=mysql_connect("114.116.85.131:3306","lifu","1261334745")){
     echo "连接成功";
    }else{
     echo "连接失败";
    }

    mysql_query("set names utf8");

    if(mysql_select_db('bdm298555274_db')){
        echo "连接数据库成功";
    }else{
        echo "连接数据库失败";
    }
                 // INSERT INTO user( `name`, `age`) VALUES( 'lifu', '24')
    if(mysql_query("INSERT INTO user( `name`, `age`) VALUES( 'lifu', '24');")){
          echo "成功";
       }else{
          echo mysql_error();
          echo "失败";
       }
     $result = mysql_query("select * from user");
//      while ($list=mysql_fetch_row($result)){
//          print_r($list);
//      }
    // 关联数组
    $array = mysql_fetch_array($result,MYSQL_ASSOC);
    //索引数组
    $array = mysql_fetch_array($result,MYSQL_NUM);
    //索引数组 + 关联数组
    $array = mysql_fetch_array($result,MYSQL_BOTH);
    $array = mysql_fetch_array($result);
    // 关联数组
    $array = mysql_fetch_assoc($result);
    //返回的是对象
    $array = mysql_fetch_object($result);
    //显示结果集中的数据条数
    $num = mysql_num_rows($result);

    $result = mysql_query("select count(*) from user");
    //返回结果集中的一个字段
    mysql_result($result, 0);
    //返回上次 insert update delete 受到影响的行数

    $result = mysql_query("update user set name=\'理发\' where ID = 1 ");
    $result = mysql_query("INSERT INTO user( `name`, `age`) VALUES( \'黎甫\', '24')");
    //返回上次受影响的条数
    mysql_affected_rows($con);
//    mysql_close($con);
//     for ($i = 0; $i < $index; $i++) {
//     }
//     foreach ($array ){
//     }


//     mysql扩展进行数据库连接的方法：
//     $link = mysql_connect('mysql_host', 'mysql_user', 'mysql_password');
//     mysqli扩展：
//     $link = mysqli_connect('mysql_host', 'mysql_user', 'mysql_password');
//     PDO扩展
//     $dsn = 'mysql:dbname=testdb;host=127.0.0.1';
//     $user = 'dbuser';
//     $password = 'dbpass';
//     $dbh = new PDO($dsn, $user, $password);
//     对于查询类的语句会返回一个资源句柄（resource），可以通过该资源获取查询结果集中的数据。
//     $row = mysql_fetch_array($res);
//     var_dump($row);
//     默认的，PHP使用最近的数据库连接执行查询，但如果存在多个连接的情况，则可以通过参数指令从那个连接中进行查询。
//     $link1 = mysql_connect('127.0.0.1', 'code1', '');
//     $link2 = mysql_connect('127.0.0.1', 'code1', '', true); //开启一个新的连接
//     $res = mysql_query('select * from user limit 1', $link1); //从第一个连接中查询数据