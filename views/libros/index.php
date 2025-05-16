<?php
require_once __DIR__ . '/../../controllers/librocontroller.php';

$controller = new librocontroller();
$libros = $controller->obtenerTodos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Libros</title>
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center">Listado de Libros</h1>
        
        <table class="table table-bordered">
            <thead class="table-info">
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Existencias</th>
                    <th>Sinopsis</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($libros as $libro): ?>
                    <tr>
                        <td><?= $libro['id'] ?></td>
                        <td><?= $libro['titulo'] ?></td>
                        <td><?= $libro['autor'] ?></td>
                        <td><?= $libro['descripcion'] ?></td>
                        <td><?= $libro['precio'] ?></td>
                        <td><?= $libro['existencias'] ?></td>
                        <td><?= $libro['sinopsis'] ?></td>
                        <td><?= $libro['estado'] ?></td>
                        <td>
                            <a href="view/editarlibro.php?id=<?= $libro['id'] ?>">Editar</a>
                            <a href="controller/eliminarlibro.php?id=<?= $libro['id'] ?>" onclick="return confirm('¿Estás seguro de eliminar este libro?')">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="/FINAL-LIBROS-WAP/views/libros/crear.php" class="">Agregar Libro</a>
    </div>
</body>
</html>
