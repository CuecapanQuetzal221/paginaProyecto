<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #E0F7FA; /* Fondo relacionado con el turquesa */
        }

        .table-header {
            background-color: #40E0D0; /* Turquesa vibrante */
        }

        .highlighted-row:hover {
            background-color: #FFCCBC; /* Naranja suave para hover */
        }

        .btn-custom {
            background-color: #FF7043 !important; /* Naranja vibrante */
        }

        footer {
            text-align: center;
            padding: 15px 0;
            background-color: #00796B;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    require "conexion.php";
    
    $consulta_sql="SELECT * FROM persona";
    $resultado=$conexion->query($consulta_sql);

    $count=mysqli_num_rows($resultado);

    echo "<h3 class='center-align teal-text text-darken-3'>Lista de Registros</h3>";
    echo "<table class='striped centered highlight'>
        <thead class='table-header'>
            <tr>
                <th>Folio</th>
                <th>Nombre</th>
                <th>CURP</th>
                <th>Número de Cuenta</th>
                <th>Carrera</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Password</th>
                <th>Fecha Registro</th>
                <th>Permisos</th>
            </tr>
        </thead>
        <tbody>";
        
if ($count > 0) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr class='highlighted-row'>"; 
            echo "<td>" . $row['folio'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['curp'] . "</td>";
            echo "<td>" . $row['numero_de_cuenta'] . "</td>";
            echo "<td>" . $row['carrera'] . "</td>";
            echo "<td>" . $row['direccion'] . "</td>";
            echo "<td>" . $row['telefono'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['fecha_registro'] . "</td>";
            echo "<td>" . $row['permisos'] . "</td>";
        echo "</tr>";
    }
    echo "</tbody></table>";
} else {
    echo "</table>";
    echo "<h5 class='center-align red-text'>No hay registros disponibles</h5>";
}
?>

    <div class="center">
        <a href="registro.php" class="btn waves-effect btn-custom">Nuevo Registro</a>
        <a href="eliminarP.php" class="btn waves-effect orange darken-2">Eliminar Registro</a>
    </div>
</div>

<footer>
    &copy; <?php echo date("Y"); ?> - Gestión de Registros
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>