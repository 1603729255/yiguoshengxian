<?php
    require "conn.php";
    
    $id=$_GET['delid'];
    mysql_query("delete from infomation where sid=$id")
    ?>