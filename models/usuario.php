
require_once __DIR__ . '/../config/database.php';

class Usuario {
    private $conn;
    private $table_name = "usuario"; // TABLA REAL EN WAP_LIBROS

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
        try {
            // Validar formato del correo
            if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                throw new Exception('Correo electrónico no válido');
            }

            $stmt = $this->conn->prepare("SELECT id, email, password, nombre_usuario, nombre_completo, fecha_creacion FROM {$this->table_name} WHERE email = ?");
            $stmt->execute([$correo]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log('Error en obtenerUsuarioPorCorreo: ' . $e->getMessage());
            throw new Exception('Error al consultar el usuario');
        } catch (Exception $e) {
            error_log('Error en obtenerUsuarioPorCorreo: ' . $e->getMessage());
            throw $e;
        }
    }

    public function obtenerTodos() {
        try {
            $stmt = $this->conn->query("SELECT id, email, nombre_usuario, nombre_completo, fecha_creacion FROM {$this->table_name}");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log('Error en obtenerTodos: ' . $e->getMessage());
            throw new Exception('Error al obtener usuarios');
        }
    }

    public function obtenerPorId($id) {
        try {
            $stmt = $this->conn->prepare("SELECT id, email, nombre_usuario, nombre_completo, fecha_creacion FROM {$this->table_name} WHERE id = ?");
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log('Error en obtenerPorId: ' . $e->getMessage());
            throw new Exception('Error al obtener el usuario');
        }
    }

    public function crear($nombre_usuario, $email, $password, $nombre_completo) {
        try {
            // Validar entradas
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new Exception('Correo electrónico no válido');
            }
            if (strlen($password) < 6) {
                throw new Exception('La contraseña debe tener al menos 6 caracteres');
            }
            if (empty($nombre_usuario) || empty($nombre_completo)) {
                throw new Exception('El nombre de usuario y el nombre completo son obligatorios');
            }

            $stmt = $this->conn->prepare("INSERT INTO {$this->table_name} (nombre_usuario, email, password, nombre_completo, fecha_creacion) VALUES (?, ?, ?, ?, NOW())");
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            return $stmt->execute([$nombre_usuario, $email, $hashedPassword, $nombre_completo]);
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) { // Código para violación de clave única (correo duplicado)
                throw new Exception('El correo electrónico ya está registrado');
            }
            error_log('Error en crear: ' . $e->getMessage());
            throw new Exception('Error al crear el usuario');
        }
    }

    public function actualizar($id, $nombre_usuario, $email, $password = null) {
        try {
            // Validar entradas
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new Exception('Correo electrónico no válido');
            }
            if (empty($nombre_usuario)) {
                throw new Exception('El nombre de usuario es obligatorio');
            }

            if ($password) {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $this->conn->prepare("UPDATE {$this->table_name} SET nombre_usuario = ?, email = ?, password = ? WHERE id = ?");
                return $stmt->execute([$nombre_usuario, $email, $hashedPassword, $id]);
            } else {
                $stmt = $this->conn->prepare("UPDATE {$this->table_name} SET nombre_usuario = ?, email = ? WHERE id = ?");
                return $stmt->execute([$nombre_usuario, $email, $id]);
            }
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) { // Código para violación de clave única
                throw new Exception('El correo electrónico ya está registrado');
            }
            error_log('Error en actualizar: ' . $e->getMessage());
            throw new Exception('Error al actualizar el usuario');
        }
    }

    public function eliminar($id) {
        try {
            $stmt = $this->conn->prepare("DELETE FROM {$this->table_name} WHERE id = ?");
            return $stmt->execute([$id]);
        } catch (PDOException $e) {
            error_log('Error en eliminar: ' . $e->getMessage());
            throw new Exception('Error al eliminar el usuario');
        }
    }
}