<?php
header('Content-type: application/json');
//��ȡ�ص�������
$jsoncallback = htmlspecialchars($_REQUEST ['jsoncallback']);
//json����
$json_data = '["customername1","customername2"]';
//���jsonp��ʽ������
echo $jsoncallback . "(" . $json_data . ")";
?>