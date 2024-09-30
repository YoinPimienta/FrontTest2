<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id_autor'];
    $nombre = $_POST['nombre_autor'];

    $sql = "UPDATE autores SET nombre_autor='$nombre' WHERE id_autor=$id";
    echo $sql; 

    if ($conn->query($sql) === TRUE) {
        echo "Autor actualizado exitosamente";
    } else {
        echo "Error actualizando autor: " . $conn->error;
    }

    header('Location: read.php');
}
?>
