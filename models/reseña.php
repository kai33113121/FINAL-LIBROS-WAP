<?php
require_once __DIR__ . '/../config/database.php';

class Resena {
    private $db;

    public function __construct() {
        $this->db = (new Database())->conn;
    }

    public function crear($id_usuario, $id_libro, $texto, $calificacion, $fecha_resena) {
        $sql = "INSERT INTO reseña (id_usuario, id_libro, texto, calificacion, fecha_resena) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$id_usuario, $id_libro, $texto, $calificacion, $fecha_resena]);
    }

    public function obtenerTodos() {
        $query = $this->db->query("SELECT * FROM reseña ORDER BY fecha_resena DESC");
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function obtenerPorId($id) {
        $stmt = $this->db->prepare("SELECT * FROM reseña WHERE id_resena = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function actualizar($id, $id_usuario, $id_libro, $texto, $calificacion, $fecha_resena) {
        $sql = "UPDATE reseña SET id_usuario = ?, id_libro = ?, texto = ?, calificacion = ?, fecha_resena = ? WHERE id_resena = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$id_usuario, $id_libro, $texto, $calificacion, $fecha_resena, $id]);
    }

    public function eliminar($id) {
        $stmt = $this->db->prepare("DELETE FROM reseña WHERE id_resena = ?");
        return $stmt->execute([$id]);
    }
}
?>
