<?php

require_once '../../sqlUtils.class.php';
require_once '../../libs/Model/User.class.php';

// $userModel = new userModel();
// for ($x=0; $x<=1000; $x++){
//     $user = new User();
// //     $user->setToId("1");
// //     $user->setId("68");
//     $user->setName("dlcs".$x);
//     $user->setPassword("1");
//     $user->setMobile("13331161450");
//     $user->setEmail("123@qq.com");
//     $user->setVserName("黑".$x);
//     $user->setGenTime(date("Y-m-d H:m:s"));
//     echo $userModel->add($user);
// }
    
class userModel{
    /**
     * 新增用户
     * @return string
     */
    public function add($user){
        $sqls = new sqlUtils();
        $con = $sqls->getCon();
        $result = null;
        try {
            $sql = "insert into user(name,toId,password,mobile,email,vserName,genTime) values('$user->name','0','$user->password','$user->mobile','$user->email','$user->vserName','$user->genTime')";
            $result = $con->query($sql);
        } catch (Exception $e) {
            
        }finally {
            $sqls->close($con);
        }
        if ($result) {
            return "success";
        } else {
            return "fail";
        }
    }
    /**
     * 获取所有用户
     * @return NULL
     */
    public function getUsers($user){
        $isFail = true;
        $li = null;
        $result = null;
        $sql = new sqlUtils();
        $con = $sql->getCon();
        try {
            $result = $con->query("select * from user order by id limit $user->page,$user->rows");
            //$result = $con->query("select * from user order by id");
            while ( $isFail ){
                $list = mysqli_fetch_array($result,MYSQLI_ASSOC);
                if(!$list){
                    $isFail = false;
                }else{
                    $li[]= $list;
                }
            }
        } catch (Exception $e) {
        }finally{
            $sql->close($con);
        }
        return $li;
    }
    /**
     * 获取所有用户
     * @return NULL
     */
    public function getAll(){
        $isFail = true;
        $li = null;
        $result = null;
        $sql = new sqlUtils();
        $con = $sql->getCon();
        try {
            $result = $con->query("select count(1) as nums from user");
        } catch (Exception $e) {
        }finally{
            $sql->close($con);
        }
        return mysqli_fetch_assoc($result);
    }
    /**
     * 根据id获取用户
     * @param unknown $id
     * @return unknown
     */
    public function  getkById($user){
        $li = null;
        $result = null;
        $sql = new sqlUtils();
        $con = $sql->getCon();
        try {
            $result = $con->query("select * from user where id = '$user->id'");
        } catch (Exception $e) {
        }finally{
            $sql->close($con);
        }
        return mysqli_fetch_object($result);
    }
    /**
     * 根据id修改用户信息
     * @param unknown $user
     * @return boolean
     */
    public function updateUser($newUser){
        $sql = new sqlUtils();
        $con = $sql->getCon();
        $isok = false;
        try {
            $user = self::getkById($newUser);
            if(!$newUser->name){
                $newUser->name = $user->name;
            }
            if(!$newUser->toId){
                $newUser->toId = $user->toId;
            }
            if(!$newUser->password){
                $newUser->password = $user->password;
            }
            if(!$newUser->mobile){
                $newUser->mobile = $user->mobile;
            }
            if(!$newUser->email){
                $newUser->email = $user->email;
            }
            if(!$newUser->vserName){
                $newUser->vserName = $user->vserName;
            }
            $update = "update user set name = '$newUser->name', toId = '$newUser->toId' , password = '$newUser->password' ,
            mobile = '$newUser->mobile' ,email = '$newUser->email' , vserName = '$newUser->vserName' where id = '$newUser->id' ";
            $isok = $con->query($update);
        } catch (Exception $e) {
        }finally{
            $sql->close($con);
        }
        if($isok){
            return "success";
        }
        return "fail";
    }
    /**
     * 删除用户
     * @param unknown $user
     * @return boolean
     */
    public function  deleteUser($user){
        $sql = new sqlUtils();
        $con = $sql->getCon();
        try {
            $update = "delete from user  where id = '$user->id'";
            $isok = $con->query($update);
            if(!$isok){
                return false;
            }
            return true;
        } catch (Exception $e) {
        }finally{
            $sql->close($con);
        }
    }
    public function getParams(){
        $user = new User();
        $id = @$_POST['id'];
        if(!$id){
            $id = @$_GET['id'];
        }
        
        $name = @$_POST['name'];
        $toId = @$_POST['toId'];
        $pass = @$_POST['password'];
        $mobile = @$_POST['mobile'];
        $email = @$_POST['email'];
        $vserName = @$_POST['vserName'];
        $pageIndex = @$_POST["page"];     //第几页的数据
        $pageSize = @$_POST["rows"];  //每页多少条数据 
        
        $user->setId($id);
        $user->setName($name);
        $user->setToId($toId);
        $user->setPassword($pass);
        $user->setMobile($mobile);
        $user->setEmail($email);
        $user->setVserName($vserName);
        $user->setPage(($pageIndex-1)*$pageSize);
        $user->setRows($pageSize);
        
        return $user;
    }

}
