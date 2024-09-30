<?php include '../includes/db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD PHP y MySQL</title>
</head>
<body>
    <h2>Lista de Usuarios</h2>

    <table border="1">
        <tr>
            <th>Id</th>
            <th>tipo de usuario</th>
            <th>correo</th>
            <th>usuario</th>
            <th>clave</th>
            <th>Acciones</th>
        </tr>

        <?php
        $sql = "SELECT * FROM usuarios";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nombre']}</td>
                        <td>{$row['correo']}</td>
                        <td>{$row['tipo_usuario']}</td>
                        <td>{$row['clave']}</td>
                        <td>
                            <a href='edit.php?id={$row['id']}'>Editar</a>
                            <a href='delete.php?id={$row['id']}'>Eliminar</a>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No hay usuarios</td></tr>";
        }
        ?>
    </table>

    <h2>Añadir usuario</h2>
    <form action="create.php" method="POST">
        <input type="text" name="nombre" placeholder="nombre" required>
        <input type="email" name="correo" placeholder="correo" required>
        <input type="text" name="tipo_usuario" placeholder="tipo_usuario" required>
        <input type="password" name="clave" placeholder="clave" required>
        <input type="submit" value="crear">
    </form>

</body>
</html>
