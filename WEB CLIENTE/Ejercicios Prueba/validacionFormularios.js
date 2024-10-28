window.addEventListener("load", iniciar);

function iniciar() {
    document.getElementById("enviar").addEventListener('click', validar, false);
}

function validaNombre() {
    var nombre = document.getElementById("nombre");
    limpiarError(nombre);
    if (nombre.value === "") {
        alert("El campo nombre no puede estar vacío.");
        error(nombre);
        return false;
    }
    return true;
}

function validaTelefono() {
    var telefono = document.getElementById("telefono");
    limpiarError(telefono);
    if (isNaN(telefono.value) || telefono.value === "") {
        alert("El campo teléfono debe ser numérico.");
        error(telefono);
        return false;
    }
    return true;
}

function validaFecha() {
    var dia = parseInt(document.getElementById("dia").value);
    var mes = parseInt(document.getElementById("mes").value) - 1;  // Los meses empiezan en 0 en JavaScript
    var ano = parseInt(document.getElementById("ano").value);
    var fecha = new Date(ano, mes, dia);

    if (isNaN(fecha) || dia < 1 || dia > 31 || mes < 0 || mes > 11 || ano < 1900 || ano > new Date().getFullYear()) {
        alert("La fecha ingresada es incorrecta.");
        return false;
    }
    return true;
}

function validaCheck() {
    var mayor = document.getElementById("mayor");
    if (!mayor.checked) {
        alert("Debes ser mayor de 18 años.");
        error(mayor);
        return false;
    }
    return true;
}

function validar(e) {
    if (validaNombre() && validaTelefono() && validaFecha() && validaCheck() && confirm("¿Deseas enviar el formulario?")) {
        return true;
    } else {
        e.preventDefault();
        return false;
    }
}

function error(elemento) {
    elemento.classList.add("error");
    elemento.focus();
}

function limpiarError(elemento) {
    elemento.classList.remove("error");
}

