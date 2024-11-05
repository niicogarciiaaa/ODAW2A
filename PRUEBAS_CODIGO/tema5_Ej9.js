document.addEventListener("DOMContentLoaded", function () {
    const nombreUsuario = document.getElementById("nombre");
    const movilCorreo = document.getElementById("movilCorreo");
    const contrasenha = document.getElementById("contrasenha");
    const confirmarContrasenha = document.getElementById("confirmarContrasenha");

    // Cargar nombre desde localStorage si existe y mostrarlo en el campo nombreUsuario
    if (localStorage.getItem("nombre")) {
        nombreUsuario.value = localStorage.getItem("nombre");
    }

    function validarNombre() {
        if (nombreUsuario.value.trim() === "") {
            aplicarError("nombre", "label1");
            return false;
        } else {
            removerError("nombre", "label1");
            return true;
        }
    }

    function validarMovilCorreo() {
        const email = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const movil = /^\d{9}$/; // Expresión regular para un número de móvil de 9 dígitos

        if (!email.test(movilCorreo.value.trim()) && !movil.test(movilCorreo.value.trim())) {
            aplicarError("movilCorreo", "label2");
            return false;
        } else {
            removerError("movilCorreo", "label2");
            return true;
        }
    }

    function validarContrasenha() {
        if (contrasenha.value.length < 6) {
            aplicarError("contrasenha", "label3");
            return false;
        } else {
            removerError("contrasenha", "label3");
            return true;
        }
    }

    function validarContrasenhaConfirmada() {
        if (contrasenha.value !== confirmarContrasenha.value) {
            aplicarError("confirmarContrasenha", "label4");
            aplicarError("contrasenha", "label3");
            return false;
        } else {
            removerError("confirmarContrasenha", "label4");
            return true;
        }
    }

    function aplicarError(idCampo, idEtiqueta) {
        document.getElementById(idCampo).classList.add('errorCampo');
        document.getElementById(idEtiqueta).classList.add('errorEtiqueta');
    }

    function removerError(idCampo, idEtiqueta) {
        document.getElementById(idCampo).classList.remove('errorCampo');
        document.getElementById(idEtiqueta).classList.remove('errorEtiqueta');
    }

    document.getElementById("formulario").addEventListener("submit", function (event) {
        event.preventDefault();
        let validacionCorrecta = true;

        if (!validarNombre()) validacionCorrecta = false;
        if (!validarMovilCorreo()) validacionCorrecta = false;
        if (!validarContrasenha()) validacionCorrecta = false;
        if (!validarContrasenhaConfirmada()) validacionCorrecta = false;

        if (validacionCorrecta) {
            // Guardar el nombre en localStorage para que esté disponible al recargar
            localStorage.setItem("nombre", nombreUsuario.value);
            alert("Tu cuenta ha sido creada correctamente");
        }
    });
});
