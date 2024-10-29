const formulario = document.getElementById('formularioDiscos');

        formulario.addEventListener('submit', function(event) {
            event.preventDefault(); // Evitar envío del formulario hasta que se valide

            // Obtener los campos
            const nombreDisco = document.getElementById('nombreDisco');
            const grupo = document.getElementById('grupo');
            const anio = document.getElementById('anio');
            const localizacion = document.getElementById('localizacion');

            // Validar el nombre del disco y el grupo de música
            let validacionCorrecta = true;

            if (nombreDisco.value.length > 20 || nombreDisco.value.length === 0) {
                aplicarError('nombreDisco', 'nombreDiscoLabel');
                validacionCorrecta = false;
            } else {
                removerError('nombreDisco', 'nombreDiscoLabel');
            }

            if (grupo.value.length > 20 || grupo.value.length === 0) {
                aplicarError('grupo', 'grupoLabel');
                validacionCorrecta = false;
            } else {
                removerError('grupo', 'grupoLabel');
            }

            // Validar el año de publicación
            if (anio.value.length !== 4 || isNaN(anio.value)) {
                aplicarError('anio', 'anioLabel');
                validacionCorrecta = false;
            } else {
                removerError('anio', 'anioLabel');
            }

            // Validar la localización (vacío o numérico)
            if (localizacion.value.length > 0 && isNaN(localizacion.value)) {
                aplicarError('localizacion', 'localizacionLabel');
                validacionCorrecta = false;
            } else {
                removerError('localizacion', 'localizacionLabel');
            }

            // Si la validación es correcta, enviar el formulario (puedes gestionar el almacenamiento aquí)
            if (validacionCorrecta) {
                alert("Formulario válido. Guardando datos del disco...");
                // Aquí podrías manejar el almacenamiento de datos
            }
        });

        // Función para aplicar error en el campo y la etiqueta
        function aplicarError(idCampo, idEtiqueta) {
            document.getElementById(idCampo).classList.add('error');
            document.getElementById(idEtiqueta).classList.add('error-label');
        }

        // Función para remover error en el campo y la etiqueta
        function removerError(idCampo, idEtiqueta) {
            document.getElementById(idCampo).classList.remove('error');
            document.getElementById(idEtiqueta).classList.remove('error-label');
        }