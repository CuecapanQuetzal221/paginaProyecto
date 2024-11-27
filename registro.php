<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Nuevo</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <style>
        /* Configuración general del cuerpo */
        body {
            background-color: #E0F7FA; /* Fondo turquesa claro */
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        /* Contenedor principal del contenido */
        main {
            flex: 1 0 auto; /* Permite que el contenido principal se expanda */
        }

        /* Estilo del footer */
        footer {
            text-align: center;
            padding: 15px 0;
            background-color: #00796B;
            color: white;
        }

        /* Tarjeta del formulario */
        .card {
            padding: 20px;
            border-radius: 10px;
        }

        /* Botón personalizado */
        .btn-custom {
            background-color: #FF7043 !important; /* Naranja vibrante */
        }
    </style>
</head>
<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 m8 l6 offset-m2 offset-l3">
                    <div class="card z-depth-3">
                        <h5 class="center-align teal-text">Registro Nuevo</h5>
                        <p class="center-align">Ingresa los datos:</p>
                        
                        <form action="./añadir.php" method="post" class="col s12">
                            <div class="input-field">
                                <input id="nombre" type="text" name="nombre" required maxlength="50">
                                <label for="nombre">Nombre</label>
                            </div>

                            <div class="input-field">
                                <input id="curp" type="text" name="curp" required maxlength="16">
                                <label for="curp">CURP</label>
                            </div>

                            <div class="input-field">
                                <input id="numero_de_cuenta" type="text" name="numero_de_cuenta" required maxlength="10">
                                <label for="numero_de_cuenta">Número de Cuenta</label>
                            </div>

                            <div class="input-field">
                                <input id="carrera" type="text" name="carrera" required maxlength="50">
                                <label for="carrera">Carrera</label>
                            </div>

                            <div class="input-field">
                                <input id="direccion" type="text" name="direccion" required maxlength="100">
                                <label for="direccion">Dirección</label>
                            </div>

                            <div class="input-field">
                                <input id="telefono" type="text" name="telefono" required maxlength="10">
                                <label for="telefono">Teléfono</label>
                            </div>

                            <div class="input-field">
                                <input id="email" type="email" name="email" required maxlength="100">
                                <label for="email">Email</label>
                            </div>

                            <div class="input-field">
                                <input id="password" type="password" name="password" required maxlength="50">
                                <label for="password">Contraseña</label>
                            </div>

                            <div class="center">
                                <button type="submit" name="submit" class="btn waves-effect btn-custom">Enviar Registro</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row center-align">
                <a href="registro.php" class="btn waves-effect teal darken-3">Añadir Nuevo Registro</a>
                <a href="index.php" class="btn waves-effect orange darken-2">Ver Registro</a>
            </div>
        </div>
    </main>

    <footer>
        &copy; <?php echo date("Y"); ?> - Gestión de Registros
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
