<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id_editorial'];
    $nombre = $_POST['nombre_editorial'];

    $sql = "UPDATE editoriales SET nombre_editorial='$nombre' WHERE id_editorial=$id"; // Cambia 'descripcion_editorial' por el nombre correcto
    echo $sql; // Aquí falta un punto y coma, ya corregido

    if ($conn->query($sql) === TRUE) {
        echo "Editorial actualizada exitosamente";
    } else {
        echo "Error actualizando editorial: " . $conn->error;
    }

    header('Location: read.php');
}
?>
