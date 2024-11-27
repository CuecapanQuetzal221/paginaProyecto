<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
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
    </style>
</head>
<body>
    <main>
        <?php
        require 'conexion.php';
        session_start();

        $numero_de_cuenta = isset($_POST['numero_de_cuenta']) ? trim($_POST['numero_de_cuenta']) : null;
        $password = isset($_POST['password']) ? trim($_POST['password']) : null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $numero_de_cuenta && $password) {
            $stmt = $conexion->prepare("SELECT COUNT(*) as contar FROM persona WHERE numero_de_cuenta = ? AND password = ?");
            $stmt->bind_param("ss", $numero_de_cuenta, $password);
            $stmt->execute();
            $result = $stmt->get_result();
            $array = $result->fetch_assoc();

            if ($array['contar'] > 0) {
                $_SESSION['numero_de_cuenta'] = $numero_de_cuenta;
                header("Location: index.php");
                exit();
            } else {
                $error_message = "Número de cuenta o contraseña incorrectos. Intenta de nuevo.";
            }

            $stmt->close();
            $conexion->close();
        }
        ?>

        <div class="container">
            <div class="row">
                <div class="col s12 m8 l6 offset-m2 offset-l3">
                    <div class="card z-depth-3">
                        <h5 class="center-align teal-text">Inicio de Sesión</h5>
                        <hr>

                        <?php if (isset($error_message)): ?>
                            <div class="card-panel red lighten-2 white-text center-align">
                                <?= htmlspecialchars($error_message); ?>
                            </div>
                        <?php endif; ?>

                        <form method="POST" action="" class="col s12">
                            <div class="input-field">
                                <input id="numero_de_cuenta" type="text" name="numero_de_cuenta" required>
                                <label for="numero_de_cuenta">Número de Cuenta</label>
                            </div>
                            
                            <div class="input-field">
                                <input id="password" type="password" name="password" required>
                                <label for="password">Contraseña</label>
                            </div>

                            <div class="center">
                                <button class="btn waves-effect btn-custom" type="submit">Iniciar Sesión</button>
                            </div>
                        </form>
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
