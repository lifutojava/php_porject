<?php
require_once 'config.php';
require_once 'libs/Model/cookieUtils.class.php';
header("Content-type:text/html;charset=utf-8");
$cookieUtils = new cookieUtils();
$loginMarks = @$_COOKIE["loginMark"];
if($loginMarks){
    $authcode = $cookieUtils->authcode($loginMarks,'DECODE', COOKIEKEY ,0); //解密 
    echo "<script>window.location.href='jquery-easyui/mydemo/main.html?".$authcode."';</script>";
}else{
    echo "<script>window.location.href='jquery-easyui/mydemo/index.html';</script>";
}
