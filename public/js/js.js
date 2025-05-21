/* <script>
        // Script para el carrusel
        const images = document.querySelectorAll('.carousel img');
        let currentIndex = 0;

        function rotateImages() {
            images[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % images.length;
            images[currentIndex].classList.add('active');
        }

        setInterval(rotateImages, 3000); // Cambia cada 3 segundos
    </script> */