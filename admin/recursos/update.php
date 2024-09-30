<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id_recurso'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $tipo = $_POST['tipo'];
    $url = $_POST['url'];
    $fecha_publicacion = $_POST['fecha_publicacion'];
    $id_editorial = $_POST['id_editorial'];
    $id_tema = $_POST['id_tema'];

    $sql = "UPDATE recursos SET titulo='$titulo', descripcion='$descripcion', tipo='$tipo', url='$url', fecha_publicacion='$fecha_publicacion', id_editorial=$id_editorial, id_tema=$id_tema WHERE id_recurso=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Recurso actualizado exitosamente";
    } else {
        echo "Error actualizando recurso: " . $conn->error;
    }

    header('Location: read_recursos.php');
}
?>
