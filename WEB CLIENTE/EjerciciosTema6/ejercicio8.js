const botonSubir = document.getElementById('boton-subir');
        const inputImagen = document.getElementById('input-imagen');
        const galeria = document.getElementById('galeria');

        botonSubir.addEventListener('click', () => {
            const archivo = inputImagen.files[0]; // Obtener el archivo seleccionado
            if (archivo) {
                const urlImagen = URL.createObjectURL(archivo); // Crear URL del archivo
                agregarImagenAGaleria(urlImagen); // Agregar imagen a la galería
                inputImagen.value = ''; // Limpiar el input
            } else {
                alert('Por favor selecciona una imagen.');
            }
        });

        function agregarImagenAGaleria(src) {
            // Crear contenedor de la imagen
            const contenedorImagen = document.createElement('div');
            contenedorImagen.className = 'contenedor-imagen';

            // Crear elemento de imagen
            const img = document.createElement('img');
            img.src = src;

            // Crear botón de eliminar
            const botonEliminar = document.createElement('button');
            botonEliminar.className = 'boton-eliminar';
            botonEliminar.textContent = 'x';

            // Agregar funcionalidad al botón de eliminar
            botonEliminar.addEventListener('click', () => {
                galeria.removeChild(contenedorImagen);
            });

            // Añadir imagen y botón al contenedor
            contenedorImagen.appendChild(img);
            contenedorImagen.appendChild(botonEliminar);

            // Añadir contenedor al DOM
            galeria.appendChild(contenedorImagen);
        }