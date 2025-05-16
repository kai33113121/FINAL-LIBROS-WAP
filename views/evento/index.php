<?php
require_once __DIR__ . '/../../controllers/eventocontroller.php';

$controller = new eventocontroller();
$eventos = $controller->obtenerTodos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Eventos</title>
</head>
<body>
    <h1>Listado de Eventos</h1>

    <a href="crear.php">Agregar Evento</a>

    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Evento</th>
                <th>Descripción</th>
                <th>Fecha del Evento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($eventos as $evento): ?>
                <tr>
                    <td><?= $evento->id_evento ?></td>
                    <td><?= htmlspecialchars($evento->nombre_evento) ?></td>
                    <td><?= htmlspecialchars($evento->descripcion) ?></td>
                    <td><?= $evento->fecha_evento ?></td>
                    <td>
                        <a href="editar.php?id=<?= $evento->id_evento ?>">Editar</a> |
                        <a href="eliminar.php?id=<?= $evento->id_evento ?>" onclick="return confirm('¿Seguro que deseas eliminar este evento?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
