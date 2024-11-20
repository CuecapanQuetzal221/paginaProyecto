<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" >
    <title>Registro Nuevo</title>
</head>
<body>

    <header >
        <h3>Ingresa los datos:</h3>
    </header>
    <div >
        <form action="./añadir.php" method="post">
            <hr>
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" required maxlength="50" placeholder="Ingresa tu nombre">
                <br><br>
                <label for="curp">CURP:</label>
                <input type="text" name="curp" required maxlength="16" placeholder="Ingresa tu apellido CURP">
                <br><br>
                <label for="numero_de_cuenta">Numero de cuenta:</label>
                <input type="mail" name="numero_de_cuenta" required maxlength="10" placeholder="Ingresa tu numero de cuenta">
                <br><br>
                <label for="carrera">Carrera:</label>
                <input type="text" name="carrera" required maxlength="50" placeholder="Ingresa tu carrera">
                <br><br>
                <label for="direccion">Direccion:</label>
                <input type="text" name="direccion" required maxlength="100" placeholder="Ingresa tu direccion">
                <br><br>
                <label for="telefono">Telefono:</label>
                <input type="text" name="telefono" required maxlength="10" placeholder="Ingresa tu telefono">
                <br><br>
                <label for="email">Email:</label>
                <input type="email" name="email" required maxlength="100" placeholder="Ingresa tu email">
                <br><br>
                <label for="password">Password:</label>
                <input type="password" name="password" required maxlength="50" placeholder="Ingresa tu password">
                <br><br>
                
            </div>
             <button type="submit" name="submit"  >Enviar registro</button>
        </form>
    </div>
</body>
</html>

<a href='registro.php'>Añadir nuevo registro</a>
<a href='index.php'>Ver registro</a>