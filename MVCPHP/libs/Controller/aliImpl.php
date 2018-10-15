<?php
require_once '../../config.php';

$mark = @$_GET["mark"];
switch ($mark) {
    case "iqa":
        //智能问答  iqa
        //question	STRING	必选	提问的问题
        $host = "http://jisuznwd.market.alicloudapi.com";
        $path = "/iqa/query";
//         $querys = "question=".@$_POST["question"];
        $querys = getPostLog(@$_POST);
        $return = queryImpls($host, $path, $querys);
        echo $return;
        //print_r($querys);
        //type  STRING 回复类型
        //content STRING 回复内容
        //relquestion STRING 其他相关问题
        break;
    case "searchCarInfo":
        //车型详情  searchCarInfo
        // brandKey	STRING	可选	品牌首字母
        // brandName	STRING	可选	品牌名称
        // carId	INT	可选	车辆的唯一标识
        // carType	STRING	可选	车型级别:a00、a0、a、b、c、d、suva0、suva、suvb、suvc、suvd、mpv、s(运动车型)、p(皮卡)、mb(面包车)、qk（轻客）
        // cxmc	STRING	可选	车型名称(以上参数至少填写一个)
        // maxResults	INT	可选	每页返回的最大数据集
        // page	INT	可选	当前页码
        $host = "http://carapi.market.alicloudapi.com";
        $path = "/searchCarInfo";
        $querys = getPostLog(@$_POST);
        echo queryImpls($host, $path, $querys);
     break;
     case "searchSeries":
         //车系查询  searchSeries
         // brandKey	STRING	可选	品牌首字母
         // brandName	STRING	必选	品牌名称
         // carType	STRING	可选	车型级别:a00、a0、a、b、c、d、suva0、suva、suvb、suvc、suvd、mpv、s(运动车型)、p(皮卡)、mb(面包车)、qk（轻客）
         // serieName	STRING	可选	车系名称
         // seriesRecordId	STRING	可选	车系的ID
         $host = "http://carapi.market.alicloudapi.com";
         $path = "/searchSeries";
         $querys = getPostLog(@$_POST);
         echo queryImpls($host, $path, $querys);
        break;
     case "searchBrand":
         //品牌查询  searchBrand
         // brandKey	STRING	可选	品牌名称首字母
         // brandName	STRING	可选	车辆品牌名称
         // brandRecordId	INT	可选	品牌id
         $host = "http://carapi.market.alicloudapi.com";
         $path = "/searchBrand";
         $querys = getPostLog(@$_POST);
         echo queryImpls($host, $path, $querys);
        break;
     case "translate":
         //测试API translate
         // srcl	STRING	必选
         // text	STRING	必选
         // tgtl	STRING	必选
         $host = "http://yeecloudmt.market.alicloudapi.com";
         $path = "/translate";
         $querys = getPostLog(@$_POST);
         echo queryImpls($host, $path, $querys);
        break;
     case "ip":
         //IP地址归属地   ip
         $host = "http://saip.market.alicloudapi.com";
         $path = "/ip";
         $querys = getPostLog(@$_POST);
         echo queryImpls($host, $path, $querys);
        break;
     case "toutiao":
         //新闻类接口 toutiao
         //type	STRING	可选	类型,,top(头条，默认),shehui(社会),guonei(国内),guoji(国际),yule(娱乐),tiyu(体育)junshi(军事),keji(科技),caijing(财经),shishang(时尚)
         $host = "http://toutiao-ali.juheapi.com";
         $path = "/toutiao/index";
         $querys = getPostLog(@$_POST);
         echo queryImpls($host, $path, $querys);
        break;
     case "driverexam":
         //获取考题接口    driverexam
         // pagenum	STRING	必选	当前页数
         // pagesize	STRING	必选	每页数量 默认1
         // sort	STRING	必选	排序方式 正常排序normal 随机排序rand 默认normal
         // subject	STRING	必选	科目类别 1为科目一 4为科目四 默认1
         // type	STRING	必选	题目类型 分为A1,A3,B1,A2,B2,C1,C2,C3,D,E,F 默认C1
         $host = "http://jisujiakao.market.alicloudapi.com";
         $path = "/driverexam/query";
         $querys = "pagenum=1&pagesize=10&sort=normal&subject=1&type=C1";
         echo queryImpls($host, $path, $querys);
        break;
     case "areaDetail":
         //根据ID查询子区域 areaDetail
         //parentId	STRING	必选	上级的区域ID
         $host = "http://ali-city.showapi.com";
         $path = "/areaDetail";
         $querys = getPostLog(@$_POST);
         echo queryImpls($host, $path, $querys);
        break;
     case "areaName":
         //根据名称查区域 areaName
         // areaName	STRING	可选	地区名称(此参数和level,至少二选一)
         // level	STRING	可选	行政级别 1省级 2市级 3县级 4乡镇级(此参数和areaName,至少二选一)
         // maxSize	INT	可选	每页返回的数据条数,最大值是20
         // page	INT	可选	分页的页数
         $host = "http://ali-city.showapi.com";
         $path = "/areaName";
         $querys = getPostLog(@$_POST);
         echo queryImpls($host, $path, $querys);
        break;
     case "shouji":
         //手机号码归属地查询接口
         //shouji	STRING	必选	手机号
         $host = "http://jshmgsdmfb.market.alicloudapi.com";
         $path = "/shouji/query";
         $querys = getPostLog(@$_POST);
         echo queryImpls($host, $path, $querys);
        break;
     case "weather":
         //天气预报查询接口  weather
         // city	STRING	可选	城市（city,cityid,citycode三者任选其一）
         // citycode	STRING	可选	城市天气代号（city,cityid,citycode三者任选其一）
         // cityid	STRING	可选	城市ID（city,cityid,citycode三者任选其一）
         // ip	STRING	可选	IP
         // location	STRING	可选	经纬度 纬度在前，,分割 如：39.983424,116.322987
         $host = "http://jisutqybmf.market.alicloudapi.com";
         $path = "/weather/query";
         $querys = getPostLog(@$_POST);
         echo queryImpls($host, $path, $querys);
        break;
    default: ;
    break;
}

/**
 * 接口发送类
 * @param unknown $host 地址
 * @param unknown $path 应用
 * @param unknown $querys   参数
 * @return string 
 */
function  queryImpls($host,$path,$querys){
    $bodys = "";
    $method = "GET";
    $appcode = APPCODE;
    $headers = array();
    array_push($headers, "Authorization:APPCODE " . $appcode);
    $url = $host . $path . "?" . $querys;
    
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_FAILONERROR, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, false);
    if (1 == strpos("$".$host, "https://"))
    {
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    }
    $returns = curl_exec($curl);
    return $returns."\n";
}

/**
 * 应用于LOG记录POST参数使用
 *
 * @version 0.0.1
 * @Author  Chenjl <ciwdream@gmail.com>
 *
 * @return  string
 */
function getPostLog(array $_data = array(),$n = ''){
    $_gPOST = empty($_data) ? I('post.') : $_data;
    $_rs    = array();
    foreach ($_gPOST AS $name=>$value){
        if( is_array($value) ){
            $_rs[] = getPostLog($value,$name);
        }else{
            if( !empty($_data) ){
                $_rs[] = $n.''.$name.''.'='.$value;
            }else{
                $_rs[] = $name.'='.$value;
            }
        }
    }
    $_rs = implode('&', $_rs);
    return $_rs;
}