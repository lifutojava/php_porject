<?php
require_once '../../sqlUtils.class.php';
require_once '../../config.php';
require_once '../../libs/Model/cookieUtils.class.php';

class loginModel{
    function login()
    {
        // 开启session
        session_start();
        $sql = new sqlUtils();
        $con = $sql->getCon();
        $name = @$_POST['name'];
        $pass = @$_POST['password'];
        $logrem = @$_POST['logrem'];
        $code = @$_POST['code'];
        $captcha = @$_SESSION["captcha"];
        if( $code==null || $captcha==null || strcasecmp($code,$captcha)!= 0 ){
            return "{\"mark\":\"fail\",\"msg\":\"验证码错误".$code.":".$captcha."\"}";
        }
        $result =  $con->query("select * from user where name = '$name' and password = $pass ");
        // 关联数组
        if ($result) {
            $user = mysqli_fetch_array($result,MYSQLI_ASSOC);
            if ($user && $user['name'] != null) {
                //设置cookie
                if($logrem && $logrem == "on"){
                    $cookieUtils = new cookieUtils();
                    $cookieUtils->setCookies($user["id"], $user["vserName"]);
                }
                return "{\"mark\":\"success\",\"msg\":\"成功\",\"id\":\"".$user["id"]."\"
                              ,\"vserName\":\"".$user["vserName"]."\"}";
            }else{
                return "{\"mark\":\"fail\",\"msg\":\"失败".$user["id"]."\"}";
            }
        }else{
            return "{\"mark\":\"fail\",\"msg\":\"失败\"}";
        }
    }
    function out(){
        $cookieUtils = new cookieUtils();
        $cookieUtils->delCookies();
    }
}

