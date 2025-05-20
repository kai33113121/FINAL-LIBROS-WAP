<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/FINAL-LIBROS-WAP/public/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
</head>
<body>
    <h1>Menú después de iniciar sesión</h1>
    
    <nav>
        <a href="/FINAL-LIBROS-WAP/views/libros/index.php">LIBROS</a>
        <a href="/FINAL-LIBROS-WAP/views/usuarios/index.php">USUARIOS</a>
        <a href="/FINAL-LIBROS-WAP/views/evento/index.php">EVENTOS</a>
        <a href="/FINAL-LIBROS-WAP/views/reseña/index.php">RESEÑAS</a>
        <a href="/FINAL-LIBROS-WAP/views/login/registro.php">REGISTRARSE</a>
    </nav>
</body>
</html> -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/FINAL-LIBROS-WAP/public/estilos/dashboard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>

<body>
    <nav>
        <a href="/FINAL-LIBROS-WAP/views/libros/index.php">LIBROS</a>
        <a href="/FINAL-LIBROS-WAP/views/usuarios/index.php">USUARIOS</a>
        <a href="/FINAL-LIBROS-WAP/views/evento/index.php">EVENTOS</a>
        <a href="/FINAL-LIBROS-WAP/views/reseña/index.php">RESEÑAS</a>
        <a href="/FINAL-LIBROS-WAP/views/login/registro.php">REGISTRARSE</a>
    </nav>
    <div class="sidebar">
        <h2 style="text-align: center;">LIBRERÍA</h2>
        <a href="#">Compra</a>
        <a href="#">Vende</a>
        <a href="#">Intercambia</a>
    </div>

    <div class="main-content">
        <div class="header">
            <h2>Bienvenido al Dashboard</h2>
            <p>Has iniciado sesión desde: <strong><?php echo $_SERVER['REMOTE_ADDR']; ?></strong></p>
        </div>

        <div class="book-list">
            <h3>Mis libros</h3>
            <table>
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Fecha de lectura</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- CODIGO PHP -->
                    <tr>
                        <td>Cien Años de Soledad</td>
                        <td>Gabriel García Márquez</td>
                        <td>2025-06-10</td>
                    </tr>
                    <tr>
                        <td>El Principito</td>
                        <td>Antoine de Saint-Exupéry</td>
                        <td>2025-06-12</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="calendar">
            <h3>Calendario de lectura</h3>
            <p>plugin libreria <strong>FullCalendar</strong> si deseas hacerlo interactivo.</p>
            <p>mostrar fechas importantes de lectura o eventos literarios.</p>
        </div>
    </div>
</body>

</html>