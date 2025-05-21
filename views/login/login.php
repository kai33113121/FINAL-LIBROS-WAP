<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/FINAL-LIBROS-WAP/public/styles.css">
    <title>Login</title>
</head>
<body>
    <header>
        <div class="">
            <h1>BIBLIOTECA VIRTUAL LIBROS WAP</h1>
        </div>
    </header>

    <nav>
        <a href="/FINAL-LIBROS-WAP/views/landing/visual.php">Inicio</a>
        <a href="">Libros</a>
    </nav>

    <div class="container">
        <h1>Iniciar Sesión Biblioteca</h1>
        
            <p style="color: red;">Email o contraseña incorrectos</p>
  
        <form class="formulario" action="../../validar.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar Sesión</button>
            <a href="/FINAL-LIBROS-WAP/views/login/registro.php">Registrarse</a>
        </form>
    </div>
</body>
</html> -->


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/FINAL-LIBROS-WAP/public/estilos/login.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="formulario">
            <h1>¡LIBROS WAP!</h1>
            <h2>Ingresa a tu cuenta</h2>
            <?php if (isset($_GET['error'])): ?>
                <p style="color: red;">Email o contraseña incorrectos</p>
            <?php endif; ?>
            <form class="form" action="../../validar.php" method="POST">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Contraseña" required>


                <button type="submit">Iniciar Sesión</button>
                <!-- <a href="/FINALWAP/views/login/registro.php">Registro</a> -->
                <button type="submit">Registrarse</button>
            </form>
        </div>
        <aside class="aside">
            <img src="/FINAL-LIBROS-WAP/public/img/logow.png" alt="IMGEN DE LOGIN">
            <!-- <h2> LIBROS WAP</h2> -->
        </aside>
    </div>
</body>

</html>