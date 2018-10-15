<?php
// require_once 'libs/ORG/smarty/Smarty.class.php';
require_once 'function.php';
require_once 'config.php';
$sma = ORG('smarty','Smarty',$viewconfig);
// require_once 'tpl/';

// $sma = new Smarty();
// $sma ->left_delimiter = '{'; //左定界符
// $sma ->right_delimiter = '}';//右定界符
// $sma ->compile_dir='template_c'; //模板编译生成文件
// $sma ->template_dir='tpl';//html模板地址
// $sma ->cache_dir='cache';//缓存
// //以下是开启缓存的另两个配置，
// $sma ->caching = true; //开启缓存
// $sma ->cache_lifetime = 120 ; //缓存时间
$sma = ORG('smarty','Smarty',$viewconfig);

$sma ->assign('articletitle','文章标题');
// $sma ->display('tpl/test.tpl');
$arr = array('title'=>'lifu学习中','author'=>'lifu');
$arr2 = array('ar'=>array('title'=>'lifu学习中','author'=>'lifu'));
$sma ->assign('arr', $arr );
$sma ->assign('arr2', $arr2 );
$sma ->assign("time",time());
$sma ->assign('articletitle2','12');
$sma ->assign('url','http://www.imooc.com/video/1059');
$sma ->assign('abc','htFF://www.imooFFFddSSom/video/1059');
$sma ->assign('abc2','htFF:
    //www.
    imooFFF
    ddSSom
    /video/1059');
$sma ->assign('name','12');
$list = array(
    array(
        "title"=>"123",
        "author"=>"234",
        "content"=>"345"
    ),
    array(
        "title"=>"1234",
        "author"=>"2345",
        "content"=>"3456"
    )
);
$sma ->assign('list',$list);

class MyObject{
    function test($test){
        return $test."加载了这个方法";
    }
}
$sma ->assign('obj',new MyObject());

function test2($params){
    $p1 = $params["p1"];
    $p2 = $params["p2"];
    return  "传入参数值一为".$p1."传入参数值2为".$p2."/n" ;
}
$sma ->registerPlugin("function", 'f_test', 'test2');

$sma ->display('tpl/test.tpl');
// $sma ->display('tpl/header.tpl');