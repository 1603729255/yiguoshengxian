<?php
    require "conn.php";
    $utitle=$_GET['utitle'];
    $uquestion=$_GET['uquestion'];
    $usolve=$_GET['usolve'];
    $uid=$_GET['uid'];

    mysql_query("update infomation set title='$utitle',question='$uquestion',solve='$usolve' ,time=now() where sid=$uid ")

?>