<?php class Database {
    private $host = "localhost";
    private $db = "librosw"; // <- ¡Aquí debe estar la base de datos!
    private $user = "root";
    private $pass = "";
    public $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function getConexion() {
        return $this->conn;
    }
}
?>