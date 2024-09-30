<?php
include './admin/includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    $sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND clave = '$clave';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    
      header('Location: ./admin/index.php');

   } else {
    echo "usuario o contraseña no validos";
   }
}

?>