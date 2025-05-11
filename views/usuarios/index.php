<?php
require_once '../../models/Usuario.php';

// Crear instancia del modelo
$usuario = new Usuario();
$usuarios = $usuario->obtenerTodos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
</head>
<body>
    <h1>Usuarios Registrados</h1>
    <a href="crear.php">Crear nuevo usuario</a>
    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Tipo</th>
                <th>Fecha Registro</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($usuarios)): ?>
                <?php foreach ($usuarios as $u): ?>
                    <tr>
                        <td><?= htmlspecialchars($u['id']) ?></td>
                        <td><?= htmlspecialchars($u['nombre_usuario']) ?></td>
                        <td><?= htmlspecialchars($u['nombre_completo']) ?></td>
                        <td><?= htmlspecialchars($u['email']) ?></td>
                        <td><?= htmlspecialchars($u['fecha_creacion']) ?></td>
                        <td>
                            <a href="ver.php?id=<?= $u['id'] ?>">Ver</a> |
                            <a href="editar.php?id=<?= $u['id'] ?>">Editar</a> |
                            <a href="eliminar.php?id=<?= $u['id'] ?>" onclick="return confirm('¿Eliminar este usuario?')">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="7">No hay usuarios registrados.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
