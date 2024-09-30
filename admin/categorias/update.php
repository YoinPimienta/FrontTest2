<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id_categoria'];
    $nombre = $_POST['nombre_categoria'];
    $descripcion = $_POST['descripcion_categoria'];

    $sql = "UPDATE categorias SET nombre_categoria='$nombre', descripcion_categoria='$descripcion' WHERE id_categoria=$id";
    echo $sql;
    
    if ($conn->query($sql) === TRUE) {
        echo "categoria actualizado exitosamente";
    } else {
        echo "Error actualizando categoria: " . $conn->error;
    }

    header('Location: read.php');
}
?>
