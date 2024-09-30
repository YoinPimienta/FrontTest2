<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id_autor'];
    $nombre = $_POST['nombre_autor'];
    $descripcion = $_POST['descripcion_autor'];

    $sql = "UPDATE autors SET nombre_autor='$nombre', descripcion_autor='$descripcion' WHERE id_autor=$id";
    echo $sql; // Aquí falta un punto y coma

    if ($conn->query($sql) === TRUE) {
        echo "autor actualizado exitosamente";
    } else {
        echo "Error actualizando autor: " . $conn->error;
    }

    header('Location: read.php');
}
?>
