export class Cliente {
  constructor(dni, fechaNacimiento, clave) {
    this.dni = dni;
    this.fechaNacimiento = fechaNacimiento;
    this.clave = clave;
  }
}

// Esperar a que la página esté completamente cargada
window.addEventListener('DOMContentLoaded', () => {
  // Recuperar los datos almacenados en localStorage
  const dni = localStorage.getItem('dni');
  const dia = localStorage.getItem('diaNacimiento');
  const mes = localStorage.getItem('mesNacimiento');
  const anho = localStorage.getItem('anhoNacimiento');

  // Si hay datos en localStorage, pre-rellenar los campos
  if (dni) {
    document.getElementById('Documento').value = dni;
  }
  if (dia) {
    document.getElementById('DiaNac').value = dia;
  }
  if (mes) {
    document.getElementById('MesNac').value = mes;
  }
  if (anho) {
    document.getElementById('AnhoNac').value = anho;
  }

  // Añadir el evento para guardar los datos al enviar el formulario
  const loginForm = document.getElementById('loginForm');
  loginForm.addEventListener('submit', function (event) {
    // Evitar que el formulario se envíe para procesar los datos primero
    event.preventDefault();
      if(document.getElementById("recordar")=="true"){
    // Obtener los valores de los inputs
    const dniValue = document.getElementById('Documento').value;
    const diaValue = document.getElementById('DiaNac').value;
    const mesValue = document.getElementById('MesNac').value;
    const anhoValue = document.getElementById('AnhoNac').value;

    // Guardar los valores en localStorage
    localStorage.setItem('dni', dniValue);
    localStorage.setItem('diaNacimiento', diaValue);
    localStorage.setItem('mesNacimiento', mesValue);
    localStorage.setItem('anhoNacimiento', anhoValue);
      }
    // Aquí puedes agregar más lógica si es necesario (por ejemplo, enviar el formulario)
  });

  // Obtener los botones de radio y el campo de texto
  const radio1 = document.getElementById('radioDni');
  const radio2 = document.getElementById('radioPasaporte');
  const textField = document.getElementById('Documento');

  // Verificar si los elementos existen
  if (radio1 && radio2 && textField) {
    // Función para actualizar el placeholder
    function updatePlaceholder() {
      if (radio1.checked) {
        textField.placeholder = "DNI o Tarjeta de Residencia";
      } else if (radio2.checked) {
        textField.placeholder = "Pasaporte";
      }
    }

    // Llamar a updatePlaceholder cuando se cambia el radio
    radio1.addEventListener('change', updatePlaceholder);
    radio2.addEventListener('change', updatePlaceholder);

    // Establecer el placeholder inicial
    updatePlaceholder();  // Llamar la función para que se establezca el placeholder al cargar
  }
});
