<?php
require_once __DIR__ . '/../models/Evento.php';

class EventoController {
    private $eventoModel;

    public function __construct() {
        $this->eventoModel = new Evento();
    }

    public function crear($nombre_evento, $descripcion, $fecha_evento) {
        return $this->eventoModel->crear($nombre_evento, $descripcion, $fecha_evento);
    }

    public function obtenerTodos() {
        return $this->eventoModel->obtenerTodos();
    }

    public function obtenerPorId($id) {
        return $this->eventoModel->obtenerPorId($id);
    }

    public function actualizar($id, $nombre_evento, $descripcion, $fecha_evento) {
        return $this->eventoModel->actualizar($id, $nombre_evento, $descripcion, $fecha_evento);
    }

    public function eliminar($id) {
        return $this->eventoModel->eliminar($id);
    }
}
?>
