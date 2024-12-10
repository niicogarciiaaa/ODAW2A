let cuerpo = document.body;

// Obtener todos los formularios
let formularios = cuerpo.getElementsByTagName('form');

// Verificar si hay formularios en el documento
if (formularios.length > 0) {
    // Obtener el último formulario
    let ultimoFormulario = formularios[formularios.length - 1];

    // Obtener todos los campos de entrada del formulario
    let campos = ultimoFormulario.getElementsByTagName('input');

    // Verificar si hay campos de entrada en el formulario
    if (campos.length > 0) {
        // Obtener el último campo
        let ultimoCampo = campos[campos.length - 1];

        // Enfocar el último campo
        ultimoCampo.focus();
    }
}
