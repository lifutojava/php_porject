<?php
require_once '../../function.php';
require_once '../../libs/Model/loginModel.class.php';
require_once '../../libs/Model/userModel.class.php';
require_once '../../libs/Model/returnModel.class.php';
require_once '../../libs/Model/cookieUtils.class.php';

//eval('$obj = new '.$name.'Model();');

$mark = @$_POST['mark'];
if(!$mark){
    $mark = @$_GET['mark'];
}



switch ($mark) {
    //用户登录
    case "user_login":
        $logins = new loginModel();
        echo $logins->login();
        break;
    //添加用户
    case "user_add":
        $userModel = new userModel();
        $user = $userModel->getParams();
        $user->setGenTime(date("Y-m-d H:m:s"));
        echo $userModel->add($user);
        break;
    //获取所有用户
    case "user_getAll":
        $userModel = new userModel();
        $user = $userModel->getParams();
        $users = $userModel->getUsers($user);
        $result = $userModel->getAll();
        $returnModel = new returnModel($result["nums"],$users);
        echo json_encode($returnModel);
        break;
    //修改用户
    case "user_update":
        if( !isSuccess() ){
            echo "<script>window.location.href='../../jquery-easyui/mydemo/index.html';</script>";
            break;
        }
        
        $userModel = new userModel();
        $user = $userModel->getParams();
        echo  $userModel->updateUser($user);
        break;
    //删除用户
    case "user_delete":
        if( !isSuccess() ){
            echo "<script>window.location.href='../../jquery-easyui/mydemo/index.html';</script>";
            break;
        }
        $userModel = new userModel();
        $user = $userModel->getParams();
        echo  $userModel->deleteUser($user);
        break;
     //获取一个用户
     case "user_getOne":
         $userModel = new userModel();
         $user = $userModel->getParams();
         $returnUser = $userModel->getkById($user);
         echo json_encode($returnUser);
         break;
     case "user_out":
         $logins = new loginModel();
         $logins->out();
         echo "success";
         break;
         
         //获取一个用户
     case "user_test":
         echo cookieCheck();
         break;
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
    default: 
        echo "<script>window.location.href='../../jquery-easyui/mydemo/index.html';</script>";
        break;
}

/**
 * 校验统一管理 方便做权限控制
 * @return boolean
 */
function isSuccess(){
    //通过cookie获取用户
    $user = cookieCheck();
    if( $user ){
        return true;
    }else{
        return false;
    }
}
/**
 * 通过cookie获取用户
 * 判断cookie是否正确
 * @return string
 */
function cookieCheck()
{
    $user = getCookieDataId();
    $userModel = new userModel();
    $returnUser = $userModel->getkById($user);
    return $returnUser;
//     return json_encode($returnUser);
}
/**
 * 获取cookie中数据 并按user对象返回
 * @return User
 */
function getCookieDataId(){
    $cookieUtils = new cookieUtils();
    $loginMarks = @$_COOKIE["loginMark"];
    $authcode = $cookieUtils->authcode($loginMarks,'DECODE', COOKIEKEY ,0); //解密
    $cookieData = convertUrlQuery($authcode);
    $user = new User();
    $user->setId($cookieData["id"]);
    $user->setVserName($cookieData["vserName"]);
    return $user;
}
//拆分字符串
function convertUrlQuery($query)
{
    $queryParts = explode('&', $query);
    $params = array();
    foreach ($queryParts as $param) {
        $item = explode('=', $param);
        $params[$item[0]] = $item[1];
    }
    return $params;
}