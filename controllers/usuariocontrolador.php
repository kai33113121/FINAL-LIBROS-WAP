<?php
require_once(__DIR__ . '/../models/usuario.phP');

class UsuarioControlador {
    public function login($correo, $password) {
        $modelo = new Usuario();
        $usuario = $modelo->obtenerUsuarioPorCorreo($correo);

        if ($usuario && $usuario['password'] === $password) {
            // sesiones para mantener al usuario conectado
            header("Location: /FINAL-LIBROS-WAP/views/index.php");
            exit();
        } else {
            header("Location: /FINAL-LIBROS-WAP/views/index.php?error=1");
            exit();
        }
    }
}
