<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Registro</title>
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

        footer {
            text-align: center;
            padding: 15px 0;
            background-color: #00796B;
            color: white;
        }

        .link-back {
            text-decoration: none;
            color: #00796B;
            font-weight: bold;
        }
        .link-back:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 m8 l6 offset-m2 offset-l3">
                    <div class="card z-depth-3">
                        <h5 class="center-align teal-text">Eliminar Registro</h5>
                        <hr>

                        <form method="POST" action="eliminarR.php" class="col s12">
                            <div class="input-field">
                                <input id="numero_de_cuenta" type="text" name="numero_de_cuenta" required>
                                <label for="numero_de_cuenta">Número de Cuenta</label>
                            </div>

                            <div class="center">
                                <button class="btn waves-effect btn-custom" type="submit">Eliminar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="center">
                <a href="index.php" class="link-back">Inicio de Listas</a>
            </div>
        </div>
    </main>

    <footer>
        &copy; <?php echo date("Y"); ?> - Gestión de Registros
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
