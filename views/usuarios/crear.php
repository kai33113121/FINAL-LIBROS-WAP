<?php
require '../../config/database.php';
require '../../models/usuario.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = new Usuario($conexion);
    $usuario->crear($_POST['nombre'], $_POST['correo']);
    header('Location: index.php');
}
?>

<h1>Crear Usuario</h1>
<form method="POST">
    Nombre: <input type="text" name="nombre"><br>
    Correo: <input type="email" name="correo"><br>
    <button type="submit">Guardar</button>
</form>
