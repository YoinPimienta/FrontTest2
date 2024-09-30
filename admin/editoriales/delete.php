<?php
include '../includes/db.php';

$id = $_GET['id_editorial'];
$sql = "DELETE FROM editoriales WHERE id_editorial = $id"; // Cambia 'editorial' por el nombre correcto

if ($conn->query($sql) === TRUE) {
    echo "editorial eliminada exitosamente";
} else {
    echo "Error eliminando editorial: " . $conn->error;
}

header('Location: read.php');
?>
