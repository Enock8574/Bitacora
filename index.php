<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS\log.css">
</head>
<body>
    <div class="container">
        <form action="Backend\login2.php" method="post">
            <h2>Login</h2>
            <label for="username">Usuario:</label>
            <input type="text" id="user" name="user" required>
            <br>
            <label for="password">Contraseña:</label>
            <input type="password" id="pass" name="pass" required>
            <br><br>
            <input type="submit" value="Ingresar">
        </form>
    </div>
</body>
</html>