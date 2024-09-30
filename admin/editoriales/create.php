<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['nombre_editorial'];

    // Insertar solo el nombre del editorial, ya que 'descripcion_editorial' no existe
    $sql = "INSERT INTO editoriales (nombre_editorial) VALUES ('$name')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo editorial creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Redireccionar a la página de lectura después de la inserción
    header('Location: read.php');
}
?>
