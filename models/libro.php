<?php
require_once __DIR__ . '/../config/database.php';

class Libro
{
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->conn;
    }

    public function registrar($titulo, $autor, $descripcion, $precio, $existencias, $creado_por, $sinopsis, $estado)
    {
        try {
            $sql = "INSERT INTO libro (titulo, autor, descripcion, precio, existencias, creado_por, sinopsis, estado)
                    VALUES (:titulo, :autor, :descripcion, :precio, :existencias, :creado_por, :sinopsis, :estado)";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':titulo', $titulo);
            $stmt->bindParam(':autor', $autor);
            $stmt->bindParam(':descripcion', $descripcion);
            $stmt->bindParam(':precio', $precio);
            $stmt->bindParam(':existencias', $existencias);
            $stmt->bindParam(':creado_por', $creado_por);
            $stmt->bindParam(':sinopsis', $sinopsis);
            $stmt->bindParam(':estado', $estado);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al registrar el libro: " . $e->getMessage();
            return false;
        }
    }

    public function obtenerTodos()
    {
        try {
            $query = $this->db->query("SELECT * FROM libro");
            return $query->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Error al obtener libros: " . $e->getMessage());
        }
    }

    public function obtenerPorId($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM libro WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function actualizar($id, $titulo, $autor, $descripcion, $precio, $existencias, $sinopsis, $estado)
    {
        try {
            $sql = "UPDATE libro SET 
                    titulo = ?, autor = ?, descripcion = ?, precio = ?, existencias = ?, sinopsis = ?, estado = ?
                    WHERE id = ?";
            $stmt = $this->db->prepare($sql);
            return $stmt->execute([
                $titulo,
                $autor,
                $descripcion,
                $precio,
                $existencias,
                $sinopsis,
                $estado,
                $id
            ]);
        } catch (PDOException $e) {
            die("Error al actualizar libro: " . $e->getMessage());
        }
    }

    public function eliminar($id)
    {
        try {
            $query = $this->db->prepare("DELETE FROM libro WHERE id = ?");
            return $query->execute([$id]);
        } catch (PDOException $e) {
            die("Error al eliminar libro: " . $e->getMessage());
        }
    }
}
?>
