<?php
require_once __DIR__ . '/../models/Resena.php';

class ResenaController {
    private $resenaModel;

    public function __construct() {
        $this->resenaModel = new Resena();
    }

    public function crear($id_usuario, $id_libro, $texto, $calificacion, $fecha_resena) {
        return $this->resenaModel->crear($id_usuario, $id_libro, $texto, $calificacion, $fecha_resena);
    }

    public function obtenerTodos() {
        return $this->resenaModel->obtenerTodos();
    }

    public function obtenerPorId($id) {
        return $this->resenaModel->obtenerPorId($id);
    }

    public function actualizar($id, $id_usuario, $id_libro, $texto, $calificacion, $fecha_resena) {
        return $this->resenaModel->actualizar($id, $id_usuario, $id_libro, $texto, $calificacion, $fecha_resena);
    }

    public function eliminar($id) {
        return $this->resenaModel->eliminar($id);
    }
}
?>
