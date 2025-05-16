<?php
require_once __DIR__ . '/../../controllers/EventoController.php';

$controller = new EventoController();
$eventos = $controller->obtenerTodos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Eventos</title>
</head>
<body>
    <h1>Eventos</h1>
    <a href="crear_evento.php">Crear Nuevo Evento</a>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Evento</th>
                <th>Descripción</th>
                <th>Fecha Evento</th>
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
                        <a href="editar_evento.php?id=<?= $evento->id_evento ?>">Editar</a> | 
                        <a href="eliminar_evento.php?id=<?= $evento->id_evento ?>" onclick="return confirm('¿Eliminar evento?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
