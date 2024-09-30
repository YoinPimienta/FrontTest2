<?php
include '../includes/db.php';

if (isset($_GET['id'])) {
    
    echo "ID recibido: " . $_GET['id'];

    $id = intval($_GET['id']);

    if ($id > 0) {
        $sql = "DELETE FROM usuarios WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            echo "Los datos del usuario se eliminaron correctamente!!";
        } else {
            echo "Error eliminando usuario: " . $conn->error;
        }

         header('Location: read.php');
        exit(); 
    } else {

        echo "ID de usuario no válido.";
    }
} else {

    echo "ID de usuario no proporcionado.";
}
?>
