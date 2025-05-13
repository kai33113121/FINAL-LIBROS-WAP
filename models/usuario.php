<?php
require_once __DIR__ . '/../config/database.php';


class Usuario {
    private $conn;
    private $table_name = "usuarios";

    // Propiedades
    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $password;
    public $tipo;
    public $fecha_registro;

    // Constructor
    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConexion();
    }

    //     $stmt = $this->conn->prepare($query);
    //     // Hash de la contraseña
    //     $this->password = password_hash($this->password, PASSWORD_DEFAULT);
    //     $this->id = htmlspecialchars(strip_tags($this->id));
    
    public function obtenerUsuarioPorCorreo($correo) {
    $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE email = ?");
    if (!$stmt) {
        die("Error en prepare(): " . print_r($this->conn->errorInfo(), true));
    }
    $stmt->execute([$correo]); // <-- Esto reemplaza bind_param en PDO
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

public function obtenerTodos() {
        $stmt = $this->conn->query("SELECT * FROM usuarios");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id) {
        $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function crear($nombre, $correo) {
        $stmt = $this->conn->prepare("INSERT INTO usuarios (nombre, correo) VALUES (?, ?)");
        return $stmt->execute([$nombre, $correo]);
    }

    public function actualizar($id, $nombre, $correo) {
        $stmt = $this->conn->prepare("UPDATE usuarios SET nombre = ?, correo = ? WHERE id = ?");
        return $stmt->execute([$nombre, $correo, $id]);
    }

    public function eliminar($id) {
        $stmt = $this->conn->prepare("DELETE FROM usuarios WHERE id = ?");
        return $stmt->execute([$id]);
    }
}