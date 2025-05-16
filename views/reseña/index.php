<?php
require_once __DIR__ . '/../../controllers/resenacontroller.php';

$controller = new resenacontroller();
$resenas = $controller->obtenerTodos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Reseñas</title>
</head>
<body>
    <h1>Listado de Reseñas</h1>

    <a href="crear.php">Agregar Reseña</a>

    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Libro</th>
                <th>Texto</th>
                <th>Calificación</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resenas as $resena): ?>
                <tr>
                    <td><?= $resena->id_resena ?></td>
                    <td><?= $resena->id_usuario ?></td>
                    <td><?= $resena->id_libro ?></td>
                    <td><?= htmlspecialchars($resena->texto) ?></td>
                    <td><?= $resena->calificacion ?></td>
                    <td><?= $resena->fecha_resena ?></td>
                    <td>
                        <a href="editar.php?id=<?= $resena->id_resena ?>">Editar</a> |
                        <a href="eliminar.php?id=<?= $resena->id_resena ?>" onclick="return confirm('¿Seguro que deseas eliminar esta reseña?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
