<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/FINAL-LIBROS-WAP/public/estilos/logandsig.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Registro de Usuario</h4>
            </div>
            <div class="card-body">
                <php if(isset($error)): ?>
                    <div class="alert alert-danger">
                        <php echo $error; ?>
                    </div>
                <php endif; ?>
                
                <form action="index.php?controller=auth&action=registro" method="POST">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Asignar nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Asignar Apellido" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Asignar correo electronico" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Asignar contraseña" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirmar_password" class="form-label">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="confirmar_password" name="confirmar_password" placeholder="Confirmar contraseña" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Registrarse</button>
                    </div>
                </form>
                
                <div class="mt-3 text-center">
                    <p>¿Ya tienes una cuenta? <a href="/FINAL-LIBROS-WAP/views/login/login.php">Iniciar Sesión</a></p>
                    <a href="/FINAL-LIBROS-WAP/views/landing/visual.php">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/FINAL-LIBROS-WAP/public/estilos/login.css">
    <title>Registro de Usuario</title>
</head>
<body>
    <div class="container">
        <div class="formulario">
            <h1>¡LIBROS WAP!</h1>
            <h2>Registro de Usuario</h2>
            <?php if(isset($error)): ?>
                <div class="alert-danger">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>
            <form class="form" action="index.php?controller=auth&action=registro" method="POST">
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="text" name="apellido" placeholder="Apellido" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <input type="password" name="confirmar_password" placeholder="Confirmar Contraseña" required>
                <button type="submit">Registrarse</button>
                <a href="/FINAL-LIBROS-WAP/views/login/login.php">¿Ya tienes una cuenta? Iniciar Sesión</a>
                <a href="/FINAL-LIBROS-WAP/views/landing/visual.php">Volver</a>
            </form>
        </div>
        <aside class="aside">
            <img src="/FINAL-LIBROS-WAP/public/img/logow.png" alt="IMAGEN DE REGISTRO">
        </aside>
    </div>
</body>
</html>