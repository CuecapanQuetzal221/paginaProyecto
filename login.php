<?php
    require 'conexion.php';

    session_start();
    
    $numero_de_cuenta=$_POST['numero_de_cuenta'];
    $password=$_POST['password'];

    $q = "SELECT COUNT(*) as contar from persona where numero_de_cuenta= '$numero_de_cuenta' AND  password= '$password'";

    $consulta=mysqli_query($conexion,$q);

    $array=mysqli_fetch_array($consulta);

    if($array['contar']>0){
        $_SESSION['numero_de_cuenta']=$numero_de_cuenta;
        header("Location:index.php");
        exit();
    }else{
        //Si no existe lo devuelve a la pagina login
        header("Location:inicioS.php");
        exit();
    }

    //Salir del sistema
    $stmt->close();
    $conexion->close();
?>