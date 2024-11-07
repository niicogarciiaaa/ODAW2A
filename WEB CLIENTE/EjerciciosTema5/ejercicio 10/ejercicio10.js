export class Cliente {
  constructor(dni, fechaNacimiento, clave) {
    this.dni = dni;
    // Combinar los valores en una fecha completa
    this.fechaNacimiento = `${fechaNacimiento.anio}-${fechaNacimiento.mes}-${fechaNacimiento.dia}`;
    this.clave = clave;
  }
}

document.addEventListener("DOMContentLoaded", () => {
  // Obtener los elementos del formulario y otros campos relevantes
  const loginForm = document.getElementById("loginForm");
  const radio1 = document.getElementById("radioDni");
  const radio2 = document.getElementById("radioPasaporte");
  const campoDocumento = document.getElementById("Documento");
  const campoDiaFecha = document.getElementById("DiaNac");
  const campoMesFecha = document.getElementById("MesNac");
  const campoAnhoFecha = document.getElementById("AnhoNac");

  // Comprobamos si los elementos necesarios existen
  if (loginForm && radio1 && radio2 && campoDocumento && campoDiaFecha && campoMesFecha && campoAnhoFecha) {

    // Recuperar los datos almacenados en localStorage (si los hay)
    const dni = localStorage.getItem("dni");
    const dia = localStorage.getItem("diaNacimiento");
    const mes = localStorage.getItem("mesNacimiento");
    const anho = localStorage.getItem("anhoNacimiento");

    // Si hay datos en localStorage, pre-rellenar los campos
    if (dni) campoDocumento.value = dni;
    if (dia) campoDiaFecha.value = dia;
    if (mes) campoMesFecha.value = mes;
    if (anho) campoAnhoFecha.value = anho;

    // Función para actualizar el placeholder de "Documento"
    function updatePlaceholder() {
      if (radio1.checked) {
        campoDocumento.placeholder = "DNI o Tarjeta de Residencia";
      } else if (radio2.checked) {
        campoDocumento.placeholder = "Pasaporte";
      }
    }

    // Llamada inicial para asegurarnos de que el placeholder está correctamente asignado
    updatePlaceholder();

    // Agregar los listeners a los radios para actualizar el placeholder dinámicamente
    radio1.addEventListener("change", updatePlaceholder);
    radio2.addEventListener("change", updatePlaceholder);

    // Agregar el evento de envío al formulario
    loginForm.addEventListener("submit", function (event) {
      event.preventDefault();
      let validacionCorrecta = true;

      // Validar formulario
      if (!validarFormulario()) validacionCorrecta = false;

      if (validacionCorrecta) {
        // Si el checkbox "recordar" está marcado, guardar los datos en localStorage
        const recordar = document.getElementById("recordar");
        if (recordar && recordar.checked) {
          guardarDatosEnLocalStorage();
        }

        // Redirigir a la siguiente página
        window.location.href = "validacionClave.html";
      }
    });
  
    
  }
});

// Función para validar el formulario
function validarFormulario() {

  
  const campoDocumento = document.getElementById("Documento");
  const campoDiaFecha = document.getElementById("DiaNac");
  const campoMesFecha = document.getElementById("MesNac");
  const campoAnhoFecha = document.getElementById("AnhoNac");

  // Verificamos que los campos no estén vacíos
  if (
    campoDocumento.value.trim() === "" ||
    campoDiaFecha.value.trim() === "" ||
    campoMesFecha.value.trim() === "" ||
    campoAnhoFecha.value.trim() === ""
  ) {
    // Aplicar los estilos de error si los campos están vacíos
    aplicarError("Documento", "labelDNI");
    aplicarError("DiaNac", "fechaNacimiento");
    aplicarError("MesNac", "fechaNacimiento");
    aplicarError("AnhoNac", "fechaNacimiento");
    return false;
  } else {
    // Remover los estilos de error si los campos están completos
    removerError("Documento", "labelDNI");
    removerError("DiaNac", "fechaNacimiento");
    removerError("MesNac", "fechaNacimiento");
    removerError("AnhoNac", "fechaNacimiento");
    return true;
  }
}

// Funciones para aplicar y remover los errores en los campos
function aplicarError(idCampo, idEtiqueta) {
  document.getElementById(idCampo).classList.add("error");
  document.getElementById(idEtiqueta).classList.add("error-label");
}

function removerError(idCampo, idEtiqueta) {
  document.getElementById(idCampo).classList.remove("error");
  document.getElementById(idEtiqueta).classList.remove("error-label");
}

function comprobarDatos(campoDocumento){
  for (let i = 0; i < clientes.length; i++) {
    if (clientes[i].dni === campoDocumento) {
      existeDNI = true;
      break; // Detiene el bucle si el DNI ya ha sido encontrado
    }
  }
}

// Función para guardar los datos en localStorage
function guardarDatosEnLocalStorage() {
  const dniValue = document.getElementById("Documento").value;
  const diaValue = document.getElementById("DiaNac").value;
  const mesValue = document.getElementById("MesNac").value;
  const anhoValue = document.getElementById("AnhoNac").value;

  localStorage.setItem("dni", dniValue);
  localStorage.setItem("diaNacimiento", diaValue);
  localStorage.setItem("mesNacimiento", mesValue);
  localStorage.setItem("anhoNacimiento", anhoValue);
}
