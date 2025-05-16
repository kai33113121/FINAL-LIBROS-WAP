<?php
require_once __DIR__ . '/../config/database.php';

class Usuario {
    private $conn;
    private $table_name = "usuario"; // Tabla real en tu base de datos

    // Propiedades
    public $id;
    public $nombre_usuario;
    public $email;
    public $password;
    public $nombre_completo;
    public $fecha_creacion;

    // Constructor
    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConexion();
    }

    public function obtenerUsuarioPorCorreo($correo) {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table_name} WHERE email = ?");
        if (!$stmt) {
            die("Error en prepare(): " . print_r($this->conn->errorInfo(), true));
        }
        $stmt->execute([$correo]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function obtenerTodos() {
        $stmt = $this->conn->query("SELECT * FROM {$this->table_name}");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id) {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table_name} WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function crear($nombre_usuario, $email, $password, $nombre_completo) {
        $stmt = $this->conn->prepare("INSERT INTO {$this->table_name} (nombre_usuario, email, password, nombre_completo) VALUES (?, ?, ?, ?)");
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        return $stmt->execute([$nombre_usuario, $email, $hashedPassword, $nombre_completo]);
    }

    public function actualizar($id, $nombre_usuario, $email) {
        $stmt = $this->conn->prepare("UPDATE {$this->table_name} SET nombre_usuario = ?, email = ? WHERE id = ?");
        return $stmt->execute([$nombre_usuario, $email, $id]);
    }

    public function eliminar($id) {
        $stmt = $this->conn->prepare("DELETE FROM {$this->table_name} WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
