<?php
require '../../config/database.php';
require '../../models/usuario.php';

$usuario = new Usuario($conexion);
$data = $usuario->obtenerPorId($_GET['id']);
?>

<h1>Detalle del Usuario</h1>
<p><strong>Nombre:</strong> <?= $data['nombre'] ?></p>
<p><strong>email:</strong> <?= $data['correo'] ?></p>
<a href="index.php">Volver</a>
