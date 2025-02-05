<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "usuarios";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $user = $conn->real_escape_string($_POST['user']);
    $pass = $conn->real_escape_string($_POST['pass']);
    
    $sql = "SELECT * FROM users WHERE user = ? AND pass = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $user, $pass);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $_SESSION['username'] = $user;
        header("Location: ../home.php");
    } else {
        echo "Usuario o contraseña incorrectos";
    }

    $stmt->close();
    $conn->close();
}
?>