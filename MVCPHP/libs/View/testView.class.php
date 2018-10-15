<?php
require_once('function.php');
require_once('config.php');

class testView{

    public function  show($para){

        $sma = ORG('smarty','Smarty',$viewconfig);
        $sma -> assign('view', $para );

        $sma ->display('tpl/showUsers.tpl');
       // $sma ->display('libs/View/NewFile.html');
       //echo  $para;

    }

}