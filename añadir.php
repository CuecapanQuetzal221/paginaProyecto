<?php
include "./conexion.php";
mysqli_set_charset($conexion, 'utf8');

$nombreUser = $_POST['nombre'];

$buscarusuario = "SELECT * FROM persona WHERE nombre = '$nombreUser'";
$resultado = $conexion->query($buscarusuario);
$count = mysqli_num_rows($resultado);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Registro</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #E0F7FA; 
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        main {
            flex: 1 0 auto; 
        }


        .card {
            padding: 20px;
            border-radius: 10px;
        }

        .btn-custom {
            background-color: #FF7043 !important;
        }

        .btn-secondary {
            background-color: #00796B !important;
        }

        footer {
            text-align: center;
            padding: 15px 0;
            background-color: #00796B;
            color: white;
        }

        .button-group a {
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 m8 l6 offset-m2 offset-l3">
                    <div class="card z-depth-3">
                        <?php if ($count == 1): ?>
                            <h5 class="center-align red-text">El usuario ya está registrado</h5>
                            <div class="center button-group">
                                <a href="./registro.php" class="btn waves-effect btn-secondary">Nuevo Registro</a>
                            </div>
                        <?php else: ?>
                            <?php
                            mysqli_query($conexion, "INSERT INTO persona(
                                nombre, curp, numero_de_cuenta, carrera, direccion, telefono, email, password
                                ) VALUES (
                                '$_POST[nombre]',
                                '$_POST[curp]',
                                '$_POST[numero_de_cuenta]',
                                '$_POST[carrera]',
                                '$_POST[direccion]',
                                '$_POST[telefono]',
                                '$_POST[email]',
                                '$_POST[password]'
                            )");
                            ?>
                            <h5 class="center-align teal-text">Usuario creado con éxito</h5>
                            <div class="center button-group">
                                <a href="./registro.php" class="btn waves-effect btn-custom">Generar Nuevo Registro</a>
                                <a href="./index.php" class="btn waves-effect btn-secondary">Ver Registros</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        &copy; <?php echo date("Y"); ?> - Gestión de Registros
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
