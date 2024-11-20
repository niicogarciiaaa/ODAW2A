// Función para obtener el valor de una cookie
function getCookie(name) {
    let value = document.cookie.match('(^|;)\\s*' + name + '\\s*=\\s*([^;]+)');
    return value ? value.pop() : '';
}

// Función para inicializar la cookie de intentos si no existe
function inicializarIntentos() {
    if (document.cookie.indexOf("intentos=") === -1) {
        document.cookie = "intentos=0; path=/";
    }
}

// Función para actualizar el número de intentos
function actualizarIntentos() {
    let intentos = parseInt(getCookie('intentos')) || 0; // Si la cookie no existe o es inválida, usa 0
    intentos++;
    document.cookie = "intentos=" + intentos + "; path=/";
    document.getElementById('intentos').innerHTML = "Intento de Envíos del formulario: " + intentos;
}

// Función para convertir a mayúsculas los campos nombre y apellidos
function convertirAMayusculas() {
    document.getElementById('nombre').value = document.getElementById('nombre').value.toUpperCase();
    document.getElementById('apellidos').value = document.getElementById('apellidos').value.toUpperCase();
}

function validarFormulario(event) {
    let errores = '';
    let validado = true;
    let primerCampoError = false; // Inicializa la variable para almacenar el primer campo con error

    // Validar NOMBRE
    if (document.getElementById('nombre').value.trim() === '') {
        errores += 'El campo "Nombre" es obligatorio.<br>';
        validado = false;
        if (!primerCampoError) primerCampoError = document.getElementById('nombre'); // Asigna el primer campo con error
    }

    // Validar APELLIDOS
    if (document.getElementById('apellidos').value.trim() === '') {
        errores += 'El campo "Apellidos" es obligatorio.<br>';
        validado = false;
        if (!primerCampoError) primerCampoError = document.getElementById('apellidos');
    }

    // Validar EDAD
    const edad = document.getElementById('edad').value;
    if (!/^\d+$/.test(edad) || edad < 0 || edad > 105) {
        errores += 'La edad debe ser un número entre 0 y 105.<br>';
        validado = false;
        if (!primerCampoError) primerCampoError = document.getElementById('edad');
    }

    // Validar NIF
    const nif = document.getElementById('nif').value;
    if (!/^\d{8}[A-Za-z]$/.test(nif)) {
        errores += 'El NIF debe tener el formato 8 números y una letra.<br>';
        validado = false;
        if (!primerCampoError) primerCampoError = document.getElementById('nif');
    }

    // Validar E-MAIL
    const email = document.getElementById('email').value;
    if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/.test(email)) {
        errores += 'El correo electrónico no tiene un formato válido.<br>';
        validado = false;
        if (!primerCampoError) primerCampoError = document.getElementById('email');
    }

    // Validar PROVINCIA
    const provincia = document.getElementById('provincia').value;
    if (provincia === '0') {
        errores += 'Debe seleccionar una provincia.<br>';
        validado = false;
        if (!primerCampoError) primerCampoError = document.getElementById('provincia');
    }

    // Validar FECHA
    const fecha = document.getElementById('fecha').value;
    if (!/^\d{2}[-/]\d{2}[-/]\d{4}$/.test(fecha)) {
        errores += 'La fecha debe tener el formato dd/mm/aaaa o dd-mm-aaaa.<br>';
        validado = false;
        if (!primerCampoError) primerCampoError = document.getElementById('fecha');
    }

    // Validar TELEFONO
    const telefono = document.getElementById('telefono').value;
    if (!/^\d{9}$/.test(telefono)) {
        errores += 'El teléfono debe tener 9 dígitos.<br>';
        validado = false;
        if (!primerCampoError) primerCampoError = document.getElementById('telefono');
    }

    // Validar HORA
    const hora = document.getElementById('hora').value;
    if (!/^\d{2}:\d{2}$/.test(hora)) {
        errores += 'La hora debe tener el formato hh:mm.<br>';
        validado = false;
        if (!primerCampoError) primerCampoError = document.getElementById('hora');
    }

    // Mostrar errores
    if (!validado) {
        document.getElementById('errores').innerHTML = errores;
        if (primerCampoError) primerCampoError.focus(); // Enfocar el primer campo con error
        event.preventDefault(); // Evita el envío del formulario si hay errores
    }

    // Confirmación de envío
    if (validado) {
        if (!confirm('¿Está seguro de que desea enviar el formulario?')) {
            event.preventDefault(); // Cancela el envío si el usuario no confirma
            
        }
    }
}

document.addEventListener("DOMContentLoaded", function () {
    inicializarIntentos();

    // Mostrar el contador de intentos al cargar la página
    let intentos = parseInt(getCookie('intentos')) || 0;
    document.getElementById('intentos').innerHTML = "Intento de Envíos del formulario: " + intentos;

    // Event listener para el envío del formulario
    document.getElementById('formulario').addEventListener('submit', function(event) {
        actualizarIntentos();
        validarFormulario(event);
    });

    // Event listeners para convertir a mayúsculas
    document.getElementById('nombre').addEventListener('blur', convertirAMayusculas);
    document.getElementById('apellidos').addEventListener('blur', convertirAMayusculas);
});
