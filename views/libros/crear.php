<?php
require_once '../../controllers/librocontroller.php';



$controller = new librocontroller();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $editorial = $_POST["editorial"];
    $anio_publicacion = $_POST["anio_publicacion"];
    $isbn = $_POST["isbn"];
    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];
    $estado = $_POST["estado"];
    $imagen = $_POST["imagen"];
    $cantidad_disponible = $_POST["cantidad_disponible"];

    if ($controller->registrar(
        $titulo, $autor, $editorial, $anio_publicacion,
        $isbn, $precio, $descripcion, $estado, $imagen, $cantidad_disponible
    )) {
        echo "<script>alert('Libro registrado con éxito.'); window.location.href='index.php';</script>";
        exit;
    } else {
        echo "<script>alert('Error al registrar el libro.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar libro</title>
</head>
<body>
    <h1>Agregar libro</h1>

    <form action="/FINALWAP/views/libros/index.php" method="POST">
        Título <br>
        <input type="text" name="titulo" required><br><br>

        Autor <br>
        <input type="text" name="autor" required><br><br>

        Editorial <br>
        <input type="text" name="editorial" required><br><br>

        Año de publicación <br>
        <input type="number" name="anio_publicacion" required><br><br>

        ISBN <br>
        <input type="text" name="isbn" required><br><br>

        Precio <br>
        <input type="number" step="0.01" name="precio" required><br><br>

        Descripción <br>
        <input type="text" name="descripcion" required><br><br>

        Estado <br>
        <input type="text" name="estado" required><br><br>

        Imagen <br>
        <input type="text" name="imagen" required><br><br>

        Cantidad disponible <br>
        <input type="number" name="cantidad_disponible" required><br><br>

        <input type="submit" value="Agregar">
    </form>
</body>
</html>
