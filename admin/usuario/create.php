<?php
include '../includes/db.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$tipo_usuario = $_POST['tipo_usuario'];
$clave = $_POST['clave'];

$sql = "INSERT INTO usuarios (nombre, correo, tipo_usuario, clave) VALUES ('$nombre', '$correo', '$tipo_usuario', '$clave')";
if ($conn->query($sql) === TRUE) {
    echo "Usuario registrado correctamente!!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header('Location: read.php');
?>
