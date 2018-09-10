<?php
	require "conn.php";
	if( isset($_POST['name'])||isset($_POST['submit'])){
		$username=@$_POST['name'];
	}else{
		exit('非法操作');
	}

	$query="select * from user where username='$username'";
	$result=mysql_query($query);

	if(mysql_fetch_array($result)){
		echo 'false';
	}else{
		echo 'true';
	}

	if(isset($_POST['submit']) && $_POST['submit']=="立即注册"){
		$user=$_POST['username'];
		$pass=md5($_POST['password']);
		$email=$_POST['email'];
		$query="insert user(sid,username,password,email) value(null,'$user','$pass','$email')";
		mysql_query($query);
		header('location:http://10.31.156.37/1804/project/src/login.html');
	}
?>