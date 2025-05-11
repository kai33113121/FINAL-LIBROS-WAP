<?php
require_once __DIR__ . '/../config/database.php';


class Libro
{
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->conn;
    }

    public function registrar($titulo, $autor, $editorial, $anio_publicacion, $isbn, $precio, $descripcion, $estado, $imagen, $cantidad_disponible)
    {
        try {
            $sql = "INSERT INTO libros (titulo, autor, editorial, anio_publicacion, isbn, precio, descripcion, estado, imagen, cantidad_disponible)
                    VALUES (:titulo, :autor, :editorial, :anio_publicacion, :isbn, :precio, :descripcion, :estado, :imagen, :cantidad_disponible)";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':titulo', $titulo);
            $stmt->bindParam(':autor', $autor);
            $stmt->bindParam(':editorial', $editorial);
            $stmt->bindParam(':anio_publicacion', $anio_publicacion);
            $stmt->bindParam(':isbn', $isbn);
            $stmt->bindParam(':precio', $precio);
            $stmt->bindParam(':descripcion', $descripcion);
            $stmt->bindParam(':estado', $estado);
            $stmt->bindParam(':imagen', $imagen);
            $stmt->bindParam(':cantidad_disponible', $cantidad_disponible);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al registrar el libro: " . $e->getMessage();
            return false;
        }
    }
    public function obtenerTodos()
    {
        try {
            $query = $this->db->query("SELECT * FROM libros");
            return $query->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Error al obtener libros: " . $e->getMessage());
        }
    }

    public function obtenerPorid($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM libros WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function actualizar($id, $titulo, $autor, $editorial, $anio_publicacion, $isbn, $precio, $descripcion, $estado, $imagen, $cantidad_disponible)
    {
        try {
            $sql = "UPDATE libros SET 
                titulo = ?, autor = ?, editorial = ?, anio_publicacion = ?, isbn = ?, 
                precio = ?, descripcion = ?, estado = ?, imagen = ?, cantidad_disponible = ?
                WHERE id = ?";
            $stmt = $this->db->prepare($sql);
            return $stmt->execute([
                $titulo,
                $autor,
                $editorial,
                $anio_publicacion,
                $isbn,
                $precio,
                $descripcion,
                $estado,
                $imagen,
                $cantidad_disponible,
                $id
            ]);
        } catch (PDOException $e) {
            die("Error al actualizar: " . $e->getMessage());
        }
    }
    public function eliminar($id)
    {
        try {
            $query = $this->db->prepare("DELETE FROM libros WHERE id = ?");
            return $query->execute([$id]);
        } catch (PDOException $e) {
            die("Error al eliminar libro: " . $e->getMessage());
        }
    }

}
?>