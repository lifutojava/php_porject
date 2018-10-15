<?php
require_once '../../sqlUtils.class.php';

class userModel
{
    function add()
    {
        $sql = new sqlUtils();
        $con = $sql->getCon();
        
        $name = @$_POST['name'];
        $pass = @$_POST['passWord'];
        // $age = $_POST['age'];
        $mobile = @$_POST['mobile'];
        $email = @$_POST['email'];
        $vserName = @$_POST['vserName'];
        
        $sql = "insert into user(name,password,mobile,email,vserName) values('$name','$pass','$mobile','$email','$vserName')";
        
        $result = $con->query($sql);
        if ($result) {
            return "success";
        } else {
            return "fail";
        }
    }
}