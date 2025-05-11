<?php
require_once   'librocontroller.php';


$contrller = new librocontroller();

$titulo="titulo";
$autor="autor";
$editorial="editorial";
$anio_publicacion="anio_publicacion";$isbn="isbn";
$precio="precio";
$descripcion="descripcion";
$estado="estado";
$imagen="imagen";
$cantidad_disponible="cantidad_disponible";

if ($contrller->registrar($titulo,
$autor,
$editorial,
$anio_publicacion,
$isbn,
$precio,
$descripcion,
$estado,
$imagen,
$cantidad_disponible)) {
    echo"Libro creado con exito.";
}else{
    echo "Error al registrar el usuario.";
}

?>