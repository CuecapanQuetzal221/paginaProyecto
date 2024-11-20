<?php
require "conexion.php";
mysqli_set_charset($conexion,'utf8');
$registroEliminado =$_POST['numero_de_cuenta']; 
$consulta="DELETE FROM persona WHERE numero_de_cuenta = ";

mysqli_query($conexion, $consulta . $registroEliminado);
mysqli_close($conexion);
header('Location: eliminarP.php');
?>