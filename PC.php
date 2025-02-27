<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitácora IT F5 - PC</title>
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
        <h1>PC</h1>
        <p>Aquí encontraras manuales para configuraciones, desmantelamientos y mantenimientos orientado para PC.</p>
        <div class="submenu">
            <h2>Software</h2>
            <ul>
                <li><a href="" target="">Como subir un PC al dominio GR</a></li>

            </ul>
            <h2>Mantenimiento</h2>
            <ul>
                <li><a href="" target="_blank">Artículo Mantenimiento 1</a></li>
                <li><a href="" target="_blank">Artículo Mantenimiento 2</a></li>
            </ul>
            <h2>Hardware</h2>
            <ul>
                <li><a href="" target="_blank">Artículo Hardware 1</a></li>
                <li><a href="" target="_blank">Artículo Hardware 2</a></li>
            </ul>
        </div>
    </main>
</body>

</html>