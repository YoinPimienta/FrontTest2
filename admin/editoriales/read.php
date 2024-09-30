<?php include '../includes/db.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD PHP y MySQL</title>
</head>
<body>
    <h2>Lista de editoriales</h2>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
        </tr>

        <?php
        $sql = "SELECT * FROM editoriales";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id_editorial']}</td>
                        <td>{$row['nombre_editorial']}</td>
                        <td>
                            <a href='edit.php?id_editorial={$row['id_editorial']}'>Editar</a>
                            <a href='delete.php?id_editorial={$row['id_editorial']}'>Eliminar</a>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No hay editoriales</td></tr>";
        }
        ?>
    </table>

    <h2>Añadir editorial</h2>
    <form action="create.php" method="POST">
        <input type="text" name="nombre_editorial" placeholder="Nombre" required>
        <input type="submit" value="Crear">
    </form>

</body>
</html>
