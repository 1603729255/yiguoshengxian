<?php
    require "conn.php";
    $title=$_GET['wtitle'];
    $question=$_GET['wquestion'];
    $solve=$_GET['wsolve'];

    mysql_query("insert infomation values(null,'$title','$question','$solve',NOW())" ); 
    echo '添加成功';

?>