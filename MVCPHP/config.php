<?php

// require_once '../../libs/Model/connect.php';
// 数据库连接地址： bdm298555274.my3w.com	114.116.85.131:3306
// 数据库名称： bdm298555274_db	lifu
// 数据库用户名： bdm298555274		1261334745
// require_once 'config.php';

   header("Content-type:text/html;charset=utf-8");

	$viewconfig = array(
                	     'left_delimiter'=>'{',
                	     'right_delimiter' => '}',
                	     'template_dir' => 'tpl',
                	     'compile_dir' => 'template_c',
                	     'cache_dir' => 'cache',
                	     'caching' => true ,
                	     'cache_lifetime' => 120
                   	);
    define("HOST", "114.116.85.131:3306");
    define("NAME", "lifu");
    define("PASSWORD", "1261334745");
    define("DBNAME", "lifu");
    define("COOKIEKEY", "http://ggstudyddup.top");
    define("APPCODE", "a2d1bd209b5f42bb8781e34ab9679b81");
?>