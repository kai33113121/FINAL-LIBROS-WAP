<?php

require_once __DIR__ . '/../models/libro.php';


class librocontroller{
    private $libroModel;

    public function __construct(){
        $this->libroModel = new Libro();
    }

    public function registrar($titulo,
    $autor,
    $editorial,
    $anio_publicacion,
    $isbn,
    $precio,
    $descripcion,
    $estado,
    $imagen,
    $cantidad_disponible){
        return $this->libroModel->registrar($titulo,
        $autor,
        $editorial,
        $anio_publicacion,
        $isbn,
        $precio,
        $descripcion,
        $estado,
        $imagen,
        $cantidad_disponible);
    }
    public function obtenerTodos() {
        return $this->libroModel->obtenerTodos();
    }
    
    public function obtenerPorId($id) {
        return $this->libroModel->obtenerPorid($id);
    }
    
    public function actualizar($id, $titulo, $autor, $editorial, $anio_publicacion, $isbn, $precio, $descripcion, $estado, $imagen, $cantidad_disponible) {
        return $this->libroModel->actualizar($id, $titulo, $autor, $editorial, $anio_publicacion, $isbn, $precio, $descripcion, $estado, $imagen, $cantidad_disponible);
    }
    
    public function eliminar($id) {
        return $this->libroModel->eliminar($id);
    }
    
}
?>