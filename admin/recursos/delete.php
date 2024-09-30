<?php
include '../includes/db.php';

$id = $_GET['id_recurso'];
$sql = "DELETE FROM recursos WHERE id_recurso=$id";

if ($conn->query($sql) === TRUE) {
    echo "Recurso eliminado exitosamente";
} else {
    echo "Error eliminando recurso: " . $conn->error;
}

header('Location: read_recursos.php');
?>
