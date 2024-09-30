<?php
include '../includes/db.php';

$id = $_GET['id_editorial']; // Cambiar a GET
$sql = "SELECT * FROM editoriales WHERE id_editorial = $id"; // Cambia 'editorial' por 'editoriales'
$result = $conn->query($sql);
$editorial = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar editorial</title>
</head>
<body>
    <h2>Editar editorial</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id_editorial" value="<?php echo $editorial['id_editorial']; ?>">
        <input type="text" name="nombre_editorial" value="<?php echo $editorial['nombre_editorial']; ?>" required>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
