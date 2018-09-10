<?php  
	require "conn.php";
	$result=mysql_query("select * from details");
	$res_arr=array();
	for($i=0;$i<mysql_num_rows($result);$i++){
		$res_arr[$i]=mysql_fetch_array($result,MYSQL_ASSOC);
	}		
	echo json_encode($res_arr);
?>