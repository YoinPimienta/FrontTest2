<?php
include '../includes/db.php';

$id = $_GET['id_categoria'];
$sql = "DELETE FROM categorias WHERE id_categoria = $id";

if ($conn->query($sql) === TRUE) {
    echo "categoria eliminado exitosamente";
} else {
    echo "Error eliminando categoria: " . $conn->error;
}

header('Location: read.php');
?>
