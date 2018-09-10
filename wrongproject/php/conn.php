<?php  
	header('content-type:text/html;charset=utf-8');
	//1：连接数据库。
	define('HOST','localhost');
	define('USERNAME','root');
	define('PASSWORD','');
	$conn=@mysql_connect(HOST,USERNAME,PASSWORD);
	if(!$conn){//失败
		die('数据库连接失败：'.mysql_error());//输出内部的信息。
	}


	//2.选择数据库+设置字符集
	mysql_select_db('wrong');
	mysql_query('SET NAMES UTF8');
?>