<?php
include '../includes/db.php';

$id = $_GET['id_categoria']; // Cambiar a GET
$sql = "SELECT * FROM categorias WHERE id_categoria = $id";
$result = $conn->query($sql);
$categorias = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar categoria</title>
</head>
<body>
    <h2>Editar categoria</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id_categoria" value="<?php echo $categorias['id_categoria']; ?>">
        <input type="text" name="nombre_categoria" value="<?php echo $categorias['nombre_categoria']; ?>" required>
        <input type="text" name="descripcion_categoria" value="<?php echo $categorias['descripcion_categoria']; ?>" required>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
