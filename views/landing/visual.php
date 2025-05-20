<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> HOME | Libros WAP</title>
    <link rel="stylesheet" href="/FINAL-LIBROS-WAP/public/styles.css">
</head>
<body>
    <header class="navbar">
        <div class="logo-container">
            <img src="/FINAL-LIBROS-WAP/public/img/logow.png" alt="Logo" class="logo">
            <span class="titulo">LIBROS WAP</span>
        </div>
        <div class="nav-links">
            <a href="/FINAL-LIBROS-WAP/views/landing/visual.php">Home</a>
            <a href="/FINAL-LIBROS-WAP/views/landing/servicios.php">Servicios</a>
            <a href="/FINAL-LIBROS-WAP/views/login/login.php">Login</a>
            <a href="/FINAL-LIBROS-WAP/views/login/registro.php">Registrarse</a>
            <a href="/FINAL-LIBROS-WAP/views/landing/contact.php">Contactanos</a>
        </div>
        
    </header>

    <main class="main-section">
        <div class="banner-libros">
            <img src="/FINAL-LIBROS-WAP/public/img/3.png" alt="Libro 1">
        </div>

        <section class="descripcion">
            <h2>Todo esta a tu alcance</h2>
            <p>En este aplicativo puedes navegar, tener información sobre la alta gama de contenido, para comprar, vender o intercambiar gustos</p>
        </section>

        <div class="libros-destacados">
            <img src="/FINAL-LIBROS-WAP/public/img/2.jpg" alt="Destacado 1">
            <img src="/FINAL-LIBROS-WAP/public/img/1.jpg" alt="Destacado 2">
            <img src="/FINAL-LIBROS-WAP/public/img/4.jpg" alt="Destacado 3">
        </div>
    </main>
</body>
</html> -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros WAP - Biblioteca Digital</title>
    <link rel="stylesheet" href="/FINAL-LIBROS-WAP/public/estilos/paleta.css">
    <link rel="stylesheet" href="/FINAL-LIBROS-WAP/public/estilos/landing.css">
</head>

<!-- body y logo y barra de navegacion  -->

<body>
    <header>
    <div class="logo">
        <img src="/FINAL-LIBROS-WAP/public/img/logow.png" alt=""> LIBROS WAP
    </div>
    <nav>
        <a href="#home">Home</a>
        <a href="#products">Productos</a>
        <a href="#categories">Categorías</a>
        <a href="#services">Servicios</a>
        <a href="#contact">Contáctenos</a>
    </nav>
    <input type="text" class="search-bar" placeholder="Buscar...">
    <div class="auth-buttons">
        <a href="/FINAL-LIBROS-WAP/views/login/login.php" class="login-btn">Iniciar Sesión</a>
        <a href="/FINAL-LIBROS-WAP/views/login/registro.php" class="register-btn">Registrarse</a>
    </div>
</header>


    <!-- home de imagen y primera vista -->

    <section id="home" class="imagen">
        <img src="/FINAL-LIBROS-WAP/public/img/5.jpg" alt="Biblioteca">
        <div class="texto-superpuesto">En Libros WAP creemos en el poder de los libros para transformar mentes, abrir
            mundos y conectar personas. Nuestra plataforma está diseñada para que amantes de la lectura puedan comprar,
            vender e intercambiar libros de manera fácil, segura y accesible.</div>
    </section>

    <!-- SECCION DE PRODUCTOS -->
    <section id="products" class="products-section">
    <div class="product-block">
        <img src="/FINAL-LIBROS-WAP/public/img/Nuevos.jpg" alt="Primera Mano">
        <h2>Libros de Primera Mano</h2>
        <p>Encuentra libros totalmente nuevos, en perfecto estado y directamente de editoriales o distribuidores.</p>
    </div>
    <div class="product-block">
        <img src="/FINAL-LIBROS-WAP/public/img/Segunda.jpg" alt="Segunda Mano">
        <h2>Libros de Segunda Mano</h2>
        <p>Explora una amplia variedad de libros usados en buen estado a precios accesibles.</p>
    </div>
</section>



    <!-- Categorias, seleccion de libros -->

    <section id="categories" class="categories">
        <h2>Categorías</h2>
        <div class="category-list">
            <div class="category-item">Ciencia Ficción<br><img src="/FINAL-LIBROS-WAP/public/img/ficcion.jpg" alt="">
            </div>
            <div class="category-item">Frases<br><img src="/FINAL-LIBROS-WAP/public/img/frases.jpg" alt=""></div>
            <div class="category-item">Teatro<br><img src="/FINAL-LIBROS-WAP/public/img/teatro.jpg" alt=""></div>
            <div class="category-item">Sátira<br><img src="/FINAL-LIBROS-WAP/public/img/satira.jpg" alt=""></div>
            <div class="category-item">Autobiografía<br><img src="/FINAL-LIBROS-WAP/public/img/auto.jpg" alt=""></div>
            <div class="category-item">Comedia<br><img src="/FINAL-LIBROS-WAP/public/img/comedia.jpg" alt=""></div>
            <div class="category-item">Literatura Fantástica<br><img src="/FINAL-LIBROS-WAP/public/img/fantastico.jpg"
                    alt=""></div>
        </div>
        </div>
    </section>

    <!-- Seccion de servicios que ofrecemos  -->
    <section id="services" class="services">
        <h2>Servicios</h2>

        <div class="services-container">
            <div class="service-card">
                <img src="/FINAL-LIBROS-WAP/public/img/compra.jpg" alt="Compra">
                <p class="service-text">COMPRA</p>
                <a href="#">Ir a comprar</a>
            </div>

            <div class="service-card">
                <img src="/FINAL-LIBROS-WAP/public/img/vende.jpg" alt="Vende">
                <p class="service-text">VENDE</p>
                <a href="#">Ir a vender</a>
            </div>

            <div class="service-card selected">
                <img src="/FINAL-LIBROS-WAP/public/img/Intercambia.jpg" alt="Intercambia">
                <p class="service-text">INTERCAMBIA</p>
                <a href="#">Ir a intercambiar</a>
            </div>
        </div>

        <p>
            En Libros WAP ofrecemos préstamos digitales, suscripciones mensuales para acceso ilimitado,
            recomendaciones personalizadas basadas en tus gustos, y una comunidad para compartir reseñas y opiniones.
        </p>
    </section>

    <!-- LIBROS DESTACADOS  -->

    <section id="featured-books" class="featured-books">
        <h2>Libros Destacados</h2>
        <div class="book-list">
            <div class="book-item">
                <img src="/FINAL-LIBROS-WAP/public/img/poca.jpg" alt="Libro 1">
                <p>Tan poca vida</p>
                <p>Hanya Yanagihara</p>
            </div>
            <div class="book-item">
                <img src="/FINAL-LIBROS-WAP/public/img/camus.jpg" alt="Libro 2">
                <p>La peste</p>
                <p>Albert Camus</p>
            </div>
            <div class="book-item">
                <img src="/FINAL-LIBROS-WAP/public/img/cien.jpg" alt="Libro 3">
                <p>Cien años de soledad</p>
                <p>Gabriel Garcia Marquez</p>
            </div>
            <div class="book-item">
                <img src="/FINAL-LIBROS-WAP/public/img/loco.jpg" alt="Libro 4">
                <p>La historia del loco</p>
                <p>John Katzenbach</p>
            </div>
            <div class="book-item">
                <img src="/FINAL-LIBROS-WAP/public/img/meters.jpg" alt="Libro 5">
                <p>A dos metros de ti</p>
                <p>Rachael Lippincot</p>
            </div>
        </div>
    </section>


    <!-- Seccion Contactanos -->

    <section id="contact" class="contact">
        <h2>Contáctenos</h2>
        <div class="contact-imgs">
            <img src="/FINAL-LIBROS-WAP/public/img/1.jpg" alt="Ilustración 1">
        </div>
        <div class="contact-desc">
            <p>Diseña conceptos para tu marca. Intercambia ideas con tu equipo y desarrolla el aspecto visual de tu
                marca. ¡Es un paso crucial en publicidad!</p>

            <div class="contact-box">
                <div class="barra barra1"></div>
                <div class="barra barra2"></div>
                <div class="barra barra3"></div>
                <div class="barra barra4"></div>
            </div>
            <p>LIBROSWAP@gmail.com</p>
        </div>
        <form>
            <input type="text" name="name" placeholder="Nombre" required>
            <input type="email" name="email" placeholder="Correo Electrónico" required>
            <textarea name="message" placeholder="Mensaje" rows="5" required></textarea>
            <button type="submit">Enviar</button>
        </form>
    </section>

    <!-- footer seccion ultima vista  -->

    <footer>
        <p>© 2025 Libros WAP. Todos los derechos reservados.</p>
    </footer>
</body>

</html>