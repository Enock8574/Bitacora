<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitácora IT F5 - Manuales</title>
    <link rel="stylesheet" href="CSS\styles.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li class="logo"><img src="img\Smtjapaneselogo.webp" alt="Icono" width: 80px;></li>
                <li><a href="home.php">Home</a></li>
                <li><a href="POS.php">POS</a></li>
                <li><a href="PC.php">PC</a></li>
                <li><a href="PDA.php">PDA</a></li>
                <li><a href="PDT.php">PDT</a></li>
                <li><a href="WYSE.php">WYSE</a></li>
                <li><a href="Upload.php">Sube tu manual</a></li>
                <form action="Backend\logout.php" method="POST">
                    <button type="submit">Cerrar Sesión</button>
                </form>
            </ul>
        </nav>
    </header>
    <main class="container">
        <h1>Sube aqui tu manual</h1>
        <div class="upload-form">
            <h2>Subir PDF</h2>
            <form action="Backend\upload.php" method="post" enctype="multipart/form-data">
                <label for="file">Seleccionar archivo PDF:</label>
                <input type="file" name="file" id="file" accept=".pdf" required>
                <button type="submit">Subir</button>
            </form>
        </div>
    </main>
</body>

</html>