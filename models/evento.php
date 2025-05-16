<?php
require_once __DIR__ . '/../config/database.php';

class Evento {
    private $db;

    public function __construct() {
        $this->db = (new Database())->conn;
    }

    public function crear($nombre_evento, $descripcion, $fecha_evento) {
        $sql = "INSERT INTO evento (nombre_evento, descripcion, fecha_evento) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$nombre_evento, $descripcion, $fecha_evento]);
    }

    public function obtenerTodos() {
        $query = $this->db->query("SELECT * FROM evento ORDER BY fecha_evento DESC");
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function obtenerPorId($id) {
        $stmt = $this->db->prepare("SELECT * FROM evento WHERE id_evento = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function actualizar($id, $nombre_evento, $descripcion, $fecha_evento) {
        $sql = "UPDATE evento SET nombre_evento = ?, descripcion = ?, fecha_evento = ? WHERE id_evento = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$nombre_evento, $descripcion, $fecha_evento, $id]);
    }

    public function eliminar($id) {
        $stmt = $this->db->prepare("DELETE FROM evento WHERE id_evento = ?");
        return $stmt->execute([$id]);
    }
}
?>
