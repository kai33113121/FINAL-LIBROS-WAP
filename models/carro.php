<?php
class Carro{
    private $db;
    private $usuario_id;

    public function __construct($db,$usuario_id){
        $this->db=$db;
        $this->usuario_id=$usuario_id;
    }

    public function obteneridcarro(){
        $stmt = $this->db->prepare("SELECT id FROM carrito WHERE usuario_id = ?");
        $stmt->execute([$this->usuario_id]);
        $carrito = $stmt->fetch();

        if($carrito){
            return $carrito['id'];
        }else{
            $stmt=$this->db->prepare("INSERT INTO carrito (usuario_id) VALUES (?)");
            $stmt->execute([$this->usuario_id]);
            return $this->db->lastinsertid();
        }
    }

    public function agregarlibro($libro_id,$cantidad){
        $carrito_id = $this->obteneridcarro();

        $stmt = $this->db->prepare("SELECT id, cantidad FROM ci.id, l.titulo,lprecio,ci.cantidad FROM carrito_items ci JOIN libros l ON ci.libro_id = l.id WHERE ci.carrito_id =?");
    }

}
?>