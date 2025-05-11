<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/styles.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Iniciar Sesión Biblioteca</h1>
        <?php if (isset($_GET['error'])): ?>
            <p style="color: red;">Email o contraseña incorrectos</p>
        <?php endif; ?>
        <form class="formulario" action="../../validar.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar Sesión</button>
            <a href="/FINALWAP/views/login/registro.php">Registro</a>
        </form>
    </div>
</body>
</html>
