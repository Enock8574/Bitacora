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
    <title>Bitácora IT F5</title>
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
        <h1>Bitácora IT F5</h1>
        <p>Porque sabemos lo tedioso que es llamar o mandar mensajes en el grupo preguntando cómo se hace x cosa. Para tu paz mental existe este sitio...</p>
    </main>
    <footer>
        <p>&copy; 2025 Página desarrollada por cierto individuo problemático de F5 ;)</p>
    </footer>
</body>

</html>