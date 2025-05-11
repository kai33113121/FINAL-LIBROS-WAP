<?php
require_once 'models/Usuario.php';

class AuthController {
    private $usuario;

    public function __construct() {
        $this->usuario = new Usuario();
        
        // Iniciar la sesión si no está activa
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    // Mostrar formulario de login
    public function mostrarLogin() {
        // Si ya está autenticado, redirigir al inicio
        if($this->estaAutenticado()) {
            header('Location: index.php');
            exit();
        }
        
        require_once 'views/auth/login.php';
    }
    
    // Mostrar formulario de registro
    public function mostrarRegistro() {
        // Si ya está autenticado, redirigir al inicio
        if($this->estaAutenticado()) {
            header('Location: index.php');
            exit();
        }
        
        require_once 'views/auth/registro.php';
    }

    // Procesar login
    public function login() {
        // Validar datos del formulario
        if(isset($_POST['email']) && isset($_POST['password'])) {
            $this->usuario->email = $_POST['email'];
            $this->usuario->password = $_POST['password'];
            
            // Intentar login
            if($this->usuario->login()) {
                // Crear sesión
                $_SESSION['usuario_id'] = $this->usuario->id;
                $_SESSION['usuario_nombre'] = $this->usuario->nombre . ' ' . $this->usuario->apellido;
                $_SESSION['usuario_tipo'] = $this->usuario->tipo;
                
                // Redirigir según el tipo de usuario
                if($this->usuario->tipo == 'admin') {
                    header('Location: index.php?controller=usuario&action=index');
                } else {
                    header('Location: index.php?controller=libro&action=index');
                }
                exit();
            } else {
                $error = "Email o contraseña incorrectos";
                require_once 'views/auth/login.php';
            }
        } else {
            $error = "Por favor, complete todos los campos";
            require_once 'views/auth/login.php';
        }
    }
    
    // Registrar usuario
    public function registro() {
        // Validar datos del formulario
        if(
            isset($_POST['nombre']) && !empty($_POST['nombre']) &&
            isset($_POST['apellido']) && !empty($_POST['apellido']) &&
            isset($_POST['email']) && !empty($_POST['email']) &&
            isset($_POST['password']) && !empty($_POST['password']) &&
            isset($_POST['confirmar_password']) && !empty($_POST['confirmar_password'])
        ) {
            // Verificar que las contraseñas coincidan
            if($_POST['password'] !== $_POST['confirmar_password']) {
                $error = "Las contraseñas no coinciden";
                require_once 'views/auth/registro.php';
                return;
            }
            
            // Verificar si el email ya existe
            $this->usuario->email = $_POST['email'];
            if($this->usuario->existeEmail()) {
                $error = "El email ya está registrado";
                require_once 'views/auth/registro.php';
                return;
            }
            
            // Asignar valores
            $this->usuario->nombre = $_POST['nombre'];
            $this->usuario->apellido = $_POST['apellido'];
            $this->usuario->password = $_POST['password'];
            $this->usuario->tipo = 'usuario'; // Por defecto es usuario
            
            // Intentar registrar
            if($this->usuario->crear()) {
                $mensaje = "Registro exitoso. Ahora puede iniciar sesión.";
                require_once 'views/auth/login.php';
            } else {
                $error = "Error al registrar el usuario";
                require_once 'views/auth/registro.php';
            }
        } else {
            $error = "Por favor, complete todos los campos";
            require_once 'views/auth/registro.php';
        }
    }
    
    // Cerrar sesión
    public function logout() {
        // Destruir todas las variables de sesión
        $_SESSION = array();
        
        // Destruir la sesión
        session_destroy();
        
        // Redirigir al login
        header('Location: index.php?controller=auth&action=login');
        exit();
    }
    
    // Verificar si el usuario está autenticado
    public function estaAutenticado() {
        return isset($_SESSION['usuario_id']);
    }
    
    // Verificar si el usuario es administrador
    public function esAdmin() {
        return isset($_SESSION['usuario_tipo']) && $_SESSION['usuario_tipo'] == 'admin';
    }
    
    // Proteger rutas de administrador
    public function protegerRutaAdmin() {
        if(!$this->estaAutenticado()) {
            header('Location: index.php?controller=auth&action=login');
            exit();
        }
        
        if(!$this->esAdmin()) {
            header('Location: index.php?controller=libro&action=index');
            exit();
        }
    }
    
    // Proteger rutas de usuario autenticado
    public function protegerRuta() {
        if(!$this->estaAutenticado()) {
            header('Location: index.php?controller=auth&action=login');
            exit();
        }
    }
}