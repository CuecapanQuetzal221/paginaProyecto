<?php
include "./conexion.php";
mysqli_set_charset($conexion,'utf8');
$nombreUser=$_POST['nombre'];

$buscarusuario="SELECT * FROM  persona WHERE nombre ='$nombreUser'";

$resultado = $conexion -> query($buscarusuario);
$count =mysqli_num_rows($resultado);
if($count==1){
    echo"El usuario ya esta registrado";
    echo "<a href='./registro.php'>Nuevo registro</a>";

}else{

    mysqli_query($conexion,"INSERT INTO persona(
        nombre,curp,numero_de_cuenta,carrera,direccion,telefono,email,password)
        VALUES(
            '$_POST[nombre]',
            '$_POST[curp]',
            '$_POST[numero_de_cuenta]',
            '$_POST[carrera]',
            '$_POST[direccion]',
            '$_POST[telefono]',
            '$_POST[email]',
            '$_POST[password]'
        )");
        echo "<br> <h1>Usuario creado con exito</h1>";
        echo "<a href='./registro.php'>Generar nuevo registro </a>";
        echo "<a href='./index.php'> Ver registros</a>";
}
 

?>