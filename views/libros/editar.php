<?php
require_once __DIR__ . '../../controladores/librocontroller.php';

$controller = new librocontroller();

$id = $_GET['id'];
$libro = $controller->obtenerPorId($id);

if (!$libro) {
    die("Libro no encontrado.");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller->actualizar(
        $_POST['id'],
        $_POST['titulo'],
        $_POST['autor'],
        $_POST['editorial'],
        $_POST['anio_publicacion'],
        $_POST['isbn'],
        $_POST['precio'],
        $_POST['descripcion'],
        $_POST['estado'],
        $_POST['imagen'],
        $_POST['cantidad_disponible']
    );
    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar libro</title>
</head>
<body>
    <h1>Editar libro</h1>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?= $libro->id ?>">

        Título <br>
        <input type="text" name="titulo" required value="<?= $libro->titulo ?>"><br><br>

        Autor <br>
        <input type="text" name="autor" required value="<?= $libro->autor ?>"><br><br>

        Editorial <br>
        <input type="text" name="editorial" required value="<?= $libro->editorial ?>"><br><br>

        Año de publicación <br>
        <input type="text" name="anio_publicacion" required value="<?= $libro->anio_publicacion ?>"><br><br>

        ISBN <br>
        <input type="number" name="isbn" required value="<?= $libro->isbn ?>"><br><br>

        Precio <br>
        <input type="number" name="precio" required value="<?= $libro->precio ?>"><br><br>

        Descripción <br>
        <input type="text" name="descripcion" required value="<?= $libro->descripcion ?>"><br><br>

        Estado <br>
        <input type="text" name="estado" required value="<?= $libro->estado ?>"><br><br>

        Imagen <br>
        <input type="text" name="imagen" required value="<?= $libro->imagen ?>"><br><br>

        Cantidad disponible <br>
        <input type="number" name="cantidad_disponible" required value="<?= $libro->cantidad_disponible ?>"><br><br>

        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
