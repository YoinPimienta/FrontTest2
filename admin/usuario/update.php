<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = intval($_POST['id']);
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $tipo_usuario = $_POST['tipo_usuario'];
    $clave = $_POST['clave'];

    $sql = "UPDATE usuario SET nombre='$nombre', correo='$correo', tipo_usuario='$tipo_usuario', clave='$clave' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Los datos del usuario se actualizaron correctamente!!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    header('Location: read.php');
}
?>
