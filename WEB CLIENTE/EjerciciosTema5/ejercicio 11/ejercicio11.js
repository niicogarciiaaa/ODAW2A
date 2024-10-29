const button = document.getElementById("escurridizo");

// Función para mover el botón a una posición aleatoria
function moverBoton() {
    const maxWidth = window.innerWidth - button.offsetWidth;
    const maxHeight = window.innerHeight - button.offsetHeight;

    const nuevaPosX = Math.floor(Math.random() * maxWidth);
    const nuevaPosY = Math.floor(Math.random() * maxHeight);

    button.style.left = nuevaPosX + "px";
    button.style.top = nuevaPosY + "px";
}

// Evento para que el botón se mueva antes de que puedan hacer clic en él
button.addEventListener("mouseover", moverBoton);