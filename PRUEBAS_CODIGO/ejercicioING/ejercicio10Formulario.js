export class Cliente {
    constructor(dni, fechaNacimiento, clave) {
      this.dni = dni;
      this.fechaNacimiento = fechaNacimiento;
      this.clave = clave;
    }
  }
  
  document.addEventListener("DOMContentLoaded", () => {
    const formulario = document.getElementById("formulario");
    const radioDNI = document.getElementById("dni");
    const radioPasaporte = document.getElementById("pasaporte");
    const numeroDocumento = document.getElementById("numeroDocumento");
    const fechaNacimiento = document.getElementById("fechaNacimiento");
  
    const documentoIdentidad = localStorage.getItem("dni");
    const fechaNac = localStorage.getItem("fechaNacimiento");
    if (documentoIdentidad) numeroDocumento.value = documentoIdentidad;
    if (fechaNac) fechaNacimiento.value = fechaNac;
  
    function updatePlaceholder() {
      numeroDocumento.placeholder = radioDNI.checked
        ? "DNI o Tarjeta de Residencia"
        : "Pasaporte";
    }
  
    radioDNI.addEventListener("change", updatePlaceholder);
    radioPasaporte.addEventListener("change", updatePlaceholder);
  
    formulario.addEventListener("submit", (event) => {
      event.preventDefault();
      if (document.getElementById("recordarDatos").checked) {
        localStorage.setItem("dni", numeroDocumento.value);
        localStorage.setItem("fechaNacimiento", fechaNacimiento.value);
      }
      window.location.href = "ejercicio10Clave.html";
    });
  });
  