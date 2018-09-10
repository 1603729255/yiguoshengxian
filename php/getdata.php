<?php  
	require "conn.php";

	$result=mysql_query("select * from luobotu");
	$lunbo=array();
	for($i=0;$i<mysql_num_rows($result);$i++){
		$lunbo[$i]=mysql_fetch_array($result,MYSQL_ASSOC);
	}	

	$floor1=mysql_query("select * from floor1");
	$f1=array();
	for($i=0;$i<mysql_num_rows($floor1);$i++){
		$f1[$i]=mysql_fetch_array($floor1,MYSQL_ASSOC);
	}
	

	$floor2=mysql_query("select * from floor2");
	$f2=array();
	for($i=0;$i<mysql_num_rows($floor2);$i++){
		$f2[$i]=mysql_fetch_array($floor2,MYSQL_ASSOC);
	}

	$floor3=mysql_query("select * from floor3");
	$f3=array();
	for($i=0;$i<mysql_num_rows($floor3);$i++){
		$f3[$i]=mysql_fetch_array($floor3,MYSQL_ASSOC);
	}

	$floor4=mysql_query("select * from floor4");
	$f4=array();
	for($i=0;$i<mysql_num_rows($floor4);$i++){
		$f4[$i]=mysql_fetch_array($floor4,MYSQL_ASSOC);
	}

	$floor5=mysql_query("select * from floor5");
	$f5=array();
	for($i=0;$i<mysql_num_rows($floor5);$i++){
		$f5[$i]=mysql_fetch_array($floor5,MYSQL_ASSOC);
	}
	
	$floor6=mysql_query("select * from floor6");
	$f6=array();
	for($i=0;$i<mysql_num_rows($floor6);$i++){
		$f6[$i]=mysql_fetch_array($floor6,MYSQL_ASSOC);
	}

	$floor7=mysql_query("select * from floor7");
	$f7=array();
	for($i=0;$i<mysql_num_rows($floor7);$i++){
		$f7[$i]=mysql_fetch_array($floor7,MYSQL_ASSOC);
	}

	$floor8=mysql_query("select * from floor8");
	$f8=array();
	for($i=0;$i<mysql_num_rows($floor8);$i++){
		$f8[$i]=mysql_fetch_array($floor8,MYSQL_ASSOC);
	}

	$floor9=mysql_query("select * from floor9");
	$f9=array();
	for($i=0;$i<mysql_num_rows($floor9);$i++){
		$f9[$i]=mysql_fetch_array($floor9,MYSQL_ASSOC);
	}

	class indata{

	}

	$indexad=new indata();
	$indexad->lunbo=$lunbo;
	$indexad->f1=$f1;
	$indexad->f2=$f2;
	$indexad->f3=$f3;
	$indexad->f4=$f4;
	$indexad->f5=$f5;
	$indexad->f6=$f6;
	$indexad->f7=$f7;
	$indexad->f8=$f8;
	$indexad->f9=$f9;
	echo json_encode($indexad);
	

	
	
	
?>