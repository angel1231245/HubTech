// JavaScript para hacer que el carrusel se mueva automáticamente
const track = document.querySelector('.carousel-track');
const images = document.querySelectorAll('.carousel-img');
let currentIndex = 0;

function moveCarousel() {
    currentIndex++;
    if (currentIndex >= images.length) {
        currentIndex = 0;
    }
    const offset = currentIndex * -100; // Mover al siguiente 100% del ancho
    track.style.transform = `translateX(${offset}%)`;
}

// Ejecutar el movimiento automático cada 3 segundos
setInterval(moveCarousel, 2000);
