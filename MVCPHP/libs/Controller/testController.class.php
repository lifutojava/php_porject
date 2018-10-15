<?php
header("Content-type:text/html;charset=utf-8");
// require_once 'libs/Model/testModel.class.php';
// require_once 'libs/View/testView.class.php';
require_once 'function.php';

class testController{

    public function setView(){

        //通过模型层得到数据
//         $model = new testModel();
        $model = M('test');
        $para = $model->getUsers();

        //通过数据显示层显示数据
//        $view = new testView();
        $view = V('test');
        $view->show($para);

    }

}

