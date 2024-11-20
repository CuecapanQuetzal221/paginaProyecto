<?php
    $host_db="127.0.0.1:3306";
    $host_name="root";
    $user_pass="123456";
    $db_name="web_db";

    $conexion=new mysqli($host_db,$host_name,$user_pass,$db_name);

    if($conexion->connect_error){
    }
    else{
        echo "<h1></h1>";
    }
?>