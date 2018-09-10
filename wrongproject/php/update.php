<?php
    require "conn.php";
    $updateid=$_GET['updateid'];
    $result=mysql_query("select * from infomation where sid=$updateid");
    $arr1=mysql_fetch_array($result,MYSQL_ASSOC);
    echo json_encode($arr1);
?>