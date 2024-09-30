<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['nombre_autor'];

    $sql = "INSERT INTO autores (nombre_autor) VALUES ('$name')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo autor creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header('Location: read.php');
}
?>

