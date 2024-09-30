<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['nombre_categoria'];
    $descripcion = $_POST['descripcion_categoria'];

    $sql = "INSERT INTO categorias (nombre_categoria, descripcion_categoria) VALUES ('$name', '$descripcion')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo categorias creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header('Location: read.php');
}   
?>
