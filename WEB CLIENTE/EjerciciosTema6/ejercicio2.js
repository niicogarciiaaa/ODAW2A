let cuerpo = document.body;

// Obtener el último formulario
 let ultimoFormulario = cuerpo.querySelector('form:last-of-type');

// Verificar si el formulario existe

  // Obtener el último campo dentro del formulario
  let campos = ultimoFormulario.querySelectorAll('input');
  let ultimoCampo = campos[campos.length - 1];
  
  // Enfocar el último campo
  
    ultimoCampo.focus();
  
