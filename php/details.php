<?php  
	require "conn.php";

	$sid=$_GET['sid'];
	$result=mysql_query("select * from details where sid=$sid");
	
	$detailsdata=mysql_fetch_array($result,MYSQL_ASSOC);
	echo json_encode($detailsdata);
?>