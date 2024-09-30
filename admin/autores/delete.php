<?php
include '../includes/db.php';

$id = $_GET['id_usuario'];
$sql = "DELETE FROM usuarios WHERE id_usuario = $id";
if ($conn->query($sql) === TRUE) {
    echo "usuario eliminado exitosamente";
} else {
    echo "Error eliminando usuario: " . $conn->error;
}

header('Location: read.php');
?>
