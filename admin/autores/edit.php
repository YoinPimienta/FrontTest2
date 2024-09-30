<?php
include '../includes/db.php';

$id = $_GET['id_autor']; // Cambiar a GET
$sql = "SELECT * FROM autores WHERE id_autor = $id";
$result = $conn->query($sql);
$autor = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar autor</title>
</head>
<body>
    <h2>Editar autor</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id_autor" value="<?php echo $autor['id_autor']; ?>">
        <input type="text" name="nombre_autor" value="<?php echo $autor['nombre_autor']; ?>" required>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
