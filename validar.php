<?php
require_once __DIR__ . '/controllers/usuariocontrolador.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $controlador = new UsuarioControlador();
    $controlador->login($email, $password);
}
