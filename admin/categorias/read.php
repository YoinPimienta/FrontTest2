<?php include '../includes/db.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD PHP y MySQL</title>
</head>
<body>
    <h2>Lista de categorias</h2>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
        </tr>

        <?php
        $sql = "SELECT * FROM categorias";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id_categoria']}</td>
                        <td>{$row['nombre_categoria']}</td>
                        <td>{$row['descripcion_categoria']}</td>
                        <td>
                            <a href='edit.php?id_categoria={$row['id_categoria']}'>Editar</a>
                            <a href='delete.php?id_categoria={$row['id_categoria']}'>Eliminar</a>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No hay categorias</td></tr>";
        }
        ?>
    </table>

    <h2>Añadir categoria</h2>
    <form action="create.php" method="POST">
        <input type="text" name="nombre_categoria" placeholder="Nombre" required>
        <input type="text" name="descripcion_categoria" placeholder="Descripcion" required>
        <input type="submit" value="Crear">
    </form>

</body>
</html>
