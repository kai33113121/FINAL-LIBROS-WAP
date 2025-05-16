<?php

require_once __DIR__ . '/../models/libro.php';

class LibroController {
    private $libroModel;

    public function __construct() {
        $this->libroModel = new Libro();
    }

    public function registrar($titulo, $autor, $descripcion, $precio, $existencias, $creado_por, $sinopsis, $estado) {
        return $this->libroModel->registrar($titulo, $autor, $descripcion, $precio, $existencias, $creado_por, $sinopsis, $estado);
    }

    public function obtenerTodos() {
        return $this->libroModel->obtenerTodos();
    }

    public function obtenerPorId($id) {
        return $this->libroModel->obtenerPorId($id);
    }

    public function actualizar($id, $titulo, $autor, $descripcion, $precio, $existencias, $sinopsis, $estado) {
        return $this->libroModel->actualizar($id, $titulo, $autor, $descripcion, $precio, $existencias, $sinopsis, $estado);
    }

    public function eliminar($id) {
        return $this->libroModel->eliminar($id);
    }
}
