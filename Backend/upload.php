<?php
// Establece límites de tamaño de archivo para la subida
ini_set('upload_max_filesize', '50M');
ini_set('post_max_size', '50M');

// Define la carpeta donde se guardarán los PDFs
$target_dir = "/PDF";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Comprueba si el archivo es un PDF
if ($fileType != "pdf") {
    echo "Solo se permiten archivos PDF.";
    $uploadOk = 0;
}

// Comprueba si el archivo ya existe
if (file_exists($target_file)) {
    echo "El archivo ya existe.";
    $uploadOk = 0;
}

// Comprueba si $uploadOk es 0 por un error
if ($uploadOk == 0) {
    echo "Lo siento, tu archivo no fue subido.";
// Si todo está bien, intenta subir el archivo
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "El archivo ". htmlspecialchars(basename($_FILES["file"]["name"])). " ha sido subido.";
        header("Refresh: 2; url=Upload.php");
    } else {
        echo "Lo siento, hubo un error al subir tu archivo.";
    }
}
?>