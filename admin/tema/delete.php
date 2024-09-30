<?php
include '../includes/db.php';

$id = $_GET['id_autor'];
$sql = "DELETE FROM categorias WHERE id_autor = $id";

if ($conn->query($sql) === TRUE) {
    echo "categoria eliminado exitosamente";
} else {
    echo "Error eliminando categoria: " . $conn->error;
}

header('Location: read.php');
?>
