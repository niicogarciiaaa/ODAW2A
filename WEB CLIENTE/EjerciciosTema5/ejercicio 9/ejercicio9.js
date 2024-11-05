document.addEventListener("DOMContentLoaded", function () {
    const nombreUsuarioField = document.getElementById("nombreUsuario");
    const correoField = document.getElementById("correo");
    const contrasena1Field = document.getElementById("contrasnha1");
    const contrasena2Field = document.getElementById("contrasnha2");

    // Cargar nombre desde localStorage si existe y mostrarlo en el campo nombreUsuario
    if (localStorage.getItem("nombre")) {
        nombreUsuarioField.value = localStorage.getItem("nombre");
    }

    function validaNombre() {
        if (nombreUsuarioField.value.trim() === "") {
            aplicarError("nombreUsuario", "nombreUsuarioL");
            return false;
        } else {
            removerError("nombreUsuario", "nombreUsuarioL");
            return true;
        }
    }

    function validaCorreo() {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(correoField.value.trim())) {
            aplicarError("correo", "labelcorreo");
            return false;
        } else {
            removerError("correo", "labelcorreo");
            return true;
        }
    }

    function validaContrasena() {
        if (contrasena1Field.value.length < 6) {
            aplicarError("contrasnha1", "labelContrasena1");
            return false;
        } else {
            removerError("contrasnha1", "labelContrasena1");
            return true;
        }
    }

    function validaConfirmacionContrasena() {
        if (contrasena1Field.value !== contrasena2Field.value) {
            aplicarError("contrasnha2", "labelContrasena2");
            aplicarError("contrasnha1", "labelContrasena1");
            return false;
        } else {
            removerError("contrasnha2", "labelContrasena2");
            return true;
        }
    }

    function aplicarError(idCampo, idEtiqueta) {
        document.getElementById(idCampo).classList.add('error');
        document.getElementById(idEtiqueta).classList.add('error-label');
    }
    

    function removerError(idCampo, idEtiqueta) {
        document.getElementById(idCampo).classList.remove('error');
        document.getElementById(idEtiqueta).classList.remove('error-label');
    }

    document.getElementById("registrationForm").addEventListener("submit", function (event) {
        event.preventDefault();
        let validacionCorrecta = true;

        if (!validaNombre()) validacionCorrecta = false;
        if (!validaCorreo()) validacionCorrecta = false;
        if (!validaContrasena()) validacionCorrecta = false;
        if (!validaConfirmacionContrasena()) validacionCorrecta = false;

        if (validacionCorrecta) {
            // Guardar el nombre en localStorage para que esté disponible al recargar
            localStorage.setItem("nombre", nombreUsuarioField.value);
            alert("Cuenta creada correctamente");
        }
    });
});
