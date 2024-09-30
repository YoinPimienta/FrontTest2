<?php include '../includes/db.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD PHP y MySQL</title>
</head>
<body>
    <h2>Lista de autores</h2>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
        </tr>

        <?php
        $sql = "SELECT * FROM autores";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id_autor']}</td>
                        <td>{$row['nombre_autor']}</td>
                        <td>
                            <a href='edit.php?id_autor={$row['id_autor']}'>Editar</a>
                            <a href='delete.php?id_autor={$row['id_autor']}'>Eliminar</a>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No hay autors</td></tr>";
        }
        ?>
    </table>

    <h2>Añadir autor</h2>
    <form action="create.php" method="POST">
        <input type="text" name="nombre_autor" placeholder="Nombre" required>
        <input type="text" name="descripcion_autor" placeholder="Descripcion" required>
        <input type="submit" value="Crear">
    </form>

</body>
</html>
