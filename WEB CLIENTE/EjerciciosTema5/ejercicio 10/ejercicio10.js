class Cliente {
  constructor(dni, fechaNacimiento, clave) {
    this.dni = dni;
    this.fechaNacimiento = fechaNacimiento;
    this.clave = clave;
  }
}

document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("loginForm");
  if (form) {
    form.addEventListener("submit", function (event) {
      event.preventDefault(); // Evita que se envíe el formulario

      // Puedes guardar los datos en localStorage aquí, si lo deseas

      // Redirigir a la siguiente ventana
      window.location.href = "validacionClave.html"; // Cambia a la página de validación
    });
  }

  // Aquí iría el resto de tu código
});

// Array de clientes
// Suponiendo que tienes un array de clientes ya definido
const clientes = [
  new Cliente("12345678A", "2000-01-01", [1, 2, 3, 4]), // Ejemplo de cliente
  new Cliente("87654321B", "1990-05-15", [5, 6, 7, 8]), // Ejemplo de cliente
  new Cliente("23456789C", "1985-09-30", [9, 0, 1, 2]), // Ejemplo de cliente
];

// Función para seleccionar una clave aleatoria de los clientes
function seleccionarClaveAleatoria() {
  const clienteAleatorio =
    clientes[Math.floor(Math.random() * clientes.length)];
  return clienteAleatorio.clave; // Devuelve la clave del cliente seleccionado
}

// Cargar y generar huecos
let claveCorrecta = seleccionarClaveAleatoria(); // Clave correcta seleccionada
const tabla = document.getElementById("huecosContainer");
// Generar los huecos en el contenedor
claveCorrecta.forEach((num) => {
  const hueco = document.createElement("div");
  hueco.classList.add("hueco");
  hueco.textContent = "."; // Mostrar un punto inicialmente
  huecosContainer.appendChild(hueco);
});

// Generar números desordenados
const numerosDesordenados = shuffle(Array.from({ length: 10 }, (_, i) => i));

// Función para crear los botones
function crearBotones() {
  const container = document.getElementById("botonesContainer");
console.log(claveCorrecta);
  // Crear la primera fila de botones
  const filaBotones1 = document.createElement("div");
  filaBotones1.classList.add("fila-botones");
  for (let j = 0; j < 5; j++) {
    const numero = numerosDesordenados[j]; // Obtener el número correspondiente
    const btn = document.createElement("button");
    
    btn.textContent = numero;
    btn.style.color = "#FF6200  "; // Asignar el color del texto a naranja
    btn.onclick = function () {
      agregarNumeroAlHueco(numero);
    };
    filaBotones1.appendChild(btn);
  }
  container.appendChild(filaBotones1); // Agregar la primera fila al contenedor

  // Crear la segunda fila de botones
  const filaBotones2 = document.createElement("div");
  filaBotones2.classList.add("fila-botones");
  for (let j = 5; j < 10; j++) {
    const numero = numerosDesordenados[j]; // Obtener el número correspondiente
    const btn = document.createElement("button");
    
    btn.textContent = numero;
    btn.style.color = "#FF6200"; // Asignar el color del texto a naranja
    btn.onclick = function () {
      agregarNumeroAlHueco(numero);
    };
    filaBotones2.appendChild(btn);
  }
  container.appendChild(filaBotones2); // Agregar la segunda fila al contenedor

  // Agregar el botón de enviar en otra línea


}

// Función para agregar el número al hueco
function agregarNumeroAlHueco(numero) {
    const huecos = document.querySelectorAll(".hueco"); // Seleccionar todos los huecos
    let numeroColocado = false;
  
    for (let hueco of huecos) {
      if (hueco.textContent === ".") {
        hueco.textContent = ""; // Limpiar el contenido
        hueco.setAttribute("placeholder", numero); // Poner el número como placeholder
        numeroColocado = true;
        break; // Salir del bucle después de reemplazar
      }
    }
  
    // Verificar si todos los huecos están llenos después de agregar un número
    const todosLlenos = Array.from(huecos).every(hueco => hueco.getAttribute("placeholder") !== ".");
    if (todosLlenos) {
      validarClave(); // Llamar a la función de validación automáticamente
    }
  }
  

// Función para validar la clave
function validarClave() {
  const claveIngresada = Array.from(document.querySelectorAll(".hueco"))
    .map((hueco) => {
      return hueco.textContent === "." ? "?" : hueco.textContent;
    })
    .join("");

  if (claveIngresada === claveCorrecta.join("")) {
    document.getElementById("correctoIncorrecto").classList.add("correcto");
    document.getElementById("correctoIncorrecto").innerHTML =
      "¡Clave correcta! ¡Bienvenido!";
  } else {
    document.getElementById("correctoIncorrecto").classList.add("incorrecto");
    document.getElementById("correctoIncorrecto").innerHTML =
      "Clave incorrecta. Inténtalo de nuevo.";
  }
}

// Llama a la función para crear los botones y los huecos al cargar la página
document.addEventListener("DOMContentLoaded", () => {
  crearBotones();
});

function shuffle(array) {
  for (let i = array.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [array[i], array[j]] = [array[j], array[i]];
  }
  return array;
}
