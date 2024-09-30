<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['nombre_autor'];

    // Insertar solo el nombre del autor, ya que 'descripcion_autor' no existe
    $sql = "INSERT INTO autores (nombre_autor) VALUES ('$name')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo autor creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Redireccionar a la página de lectura después de la inserción
    header('Location: read.php');
}
?>
