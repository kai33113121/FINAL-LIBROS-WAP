<?php
require '../../config/database.php';
require '../../models/usuario.php';

$usuario = new Usuario($conexion);
$usuario->eliminar($_GET['id']);
header('Location: index.php');
