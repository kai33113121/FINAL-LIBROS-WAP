<?php
require '../../config/database.php';
require '../../models/usuario.php';

$usuario = new Usuario($conexion);
$data = $usuario->obtenerPorId($_GET['id']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario->actualizar($_GET['id'], $_POST['nombre'], $_POST['correo']);
    header('Location: index.php');
}
?>

<h1>Editar Usuario</h1>
<form method="POST">
    Nombre: <input type="text" name="nombre" value="<?= $data['nombre'] ?>"><br>
    Correo: <input type="email" name="correo" value="<?= $data['correo'] ?>"><br>
    <button type="submit">Actualizar</button>
</form>
