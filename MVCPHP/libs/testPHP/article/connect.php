<?php
	require_once 'article/config.php';
	//����
	if(!($con = mysql_connect(HOST, USERNAME, PASSWORD))){
		echo mysql_error();
	}
	//ѡ��
	if(!mysql_select_db('bdm298555274_db')){
		echo mysql_error();
	}
	//�ַ�
	if(!mysql_query('set names utf8')){
		echo mysql_error();
	}
?>