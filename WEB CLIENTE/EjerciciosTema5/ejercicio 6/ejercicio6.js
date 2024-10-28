const imagenes = ['azul.png', 'verde.png', 'rojo.png', 'morado.png', 'amarillo.png', 'naranja.png'];
    let aciertos = 0;
    let primeraCarta = null;
    let segundaCarta = null;
    let bloquearTablero = false;

    // Duplicar imágenes para crear parejas y mezclarlas
    const paresImagenes = imagenes.concat(imagenes).sort(() => 0.5 - Math.random());

    // Crear tabla con las imágenes
    const tabla = document.getElementById('tabla');
    let contadorAciertos = document.getElementById('aciertos');

    function generarTabla() {
        let indiceImagen = 0;
        for (let fila = 0; fila < 3; fila++) {
            const tr = document.createElement('tr');
            for (let col = 0; col < 4; col++) {
                const td = document.createElement('td');
                const img = document.createElement('img');
    
                // Configurar la imagen de dorso inicialmente
                img.src = paresImagenes[indiceImagen]; // Guardar la imagen real
                
                td.appendChild(img);
                td.addEventListener('click', mostrarImagen);
                tr.appendChild(td);
                indiceImagen++;
            }
            tabla.appendChild(tr);
        }
    }

    // Función para mostrar las imágenes cuando el usuario hace clic
    function mostrarImagen(event) {
        if (bloquearTablero) return; // Bloquear si hay cartas esperando ser ocultadas

        const cartaSeleccionada = event.target.querySelector('img');
        if (!primeraCarta) {
            primeraCarta = cartaSeleccionada;
            cartaSeleccionada.style.display = 'block';
        } else if (!segundaCarta && cartaSeleccionada !== primeraCarta) {
            segundaCarta = cartaSeleccionada;
            cartaSeleccionada.style.display = 'block';
            verificarPareja();
        }
    }

    // Verificar si las dos cartas seleccionadas son iguales
    function verificarPareja() {
        bloquearTablero = true;
        if (primeraCarta.src === segundaCarta.src) {
            aciertos++;
            actualizarAciertos();
            resetearCartas(true);
        } else {
            setTimeout(() => {
                primeraCarta.style.display = 'none';
                segundaCarta.style.display = 'none';
                resetearCartas(false);
            }, 2000);
        }
    }

    // Actualizar el contador de aciertos
    function actualizarAciertos() {
        contadorAciertos.textContent = `Aciertos: ${aciertos}`;
    }

    // Resetear las cartas seleccionadas
    function resetearCartas(sonIguales) {
        primeraCarta = null;
        segundaCarta = null;
        bloquearTablero = false;
    }

    // Gestionar el nombre del usuario y contador de visitas mediante cookies
    function manejarCookies() {
        const nombreUsuario = obtenerCookie("nombreUsuario");
        let contadorVisitas = obtenerCookie("contadorVisitas") || 0;

        if (!nombreUsuario) {
            const nombre = prompt("Escribe tu nombre:");
            if (nombre) {
                document.cookie = `nombreUsuario=${nombre};path=/`;
                document.cookie = `contadorVisitas=1;path=/`;
                document.getElementById('mensaje').textContent = `Hola ${nombre}, bienvenido por primera vez.`;
            }
        } else {
            contadorVisitas++;
            document.cookie = `contadorVisitas=${contadorVisitas};path=/`;
            document.getElementById('mensaje').textContent = `Hola ${nombreUsuario}, esta es tu visita número ${contadorVisitas}.`;
        }
    }

    // Función para obtener una cookie
    function obtenerCookie(nombre) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${nombre}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
    }

    // Iniciar el juego
    generarTabla();
    manejarCookies();