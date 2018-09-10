<?php
    require "conn.php";

    $result=mysql_query("select * from infomation");
    $arr=Array();
    for($i=0;$i<mysql_num_rows($result);$i++){
        $arr[$i]=mysql_fetch_array($result,MYSQL_ASSOC);
    }
    echo json_encode($arr);
?>