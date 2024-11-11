import { Cliente } from "./ejercicio10Formulario.js";

// Lista de clientes con sus claves
const clientes = [
  new Cliente("53519861B", "09/04/1992", [1, 2, 3, 4]),
  new Cliente("45748478Y", "22/07/1989", [5, 6, 7, 8]),
  new Cliente("76754481F", "15/09/1967", [9, 1, 2, 5])
];

// Seleccionar una clave aleatoria de un cliente
function claveAleatoria() {
  const clienteAleatorio = clientes[Math.floor(Math.random() * clientes.length)];
  return clienteAleatorio.clave;
}

let claveCorrecta = claveAleatoria();
const tabla = document.getElementById("contenedorClave");

// Generar los huecos en el contenedor
claveCorrecta.forEach(() => {
  const emplazamiento = document.createElement("div");
  emplazamiento.classList.add("hueco");
  emplazamiento.textContent = ".";
  tabla.appendChild(emplazamiento);
});
console.log(claveCorrecta);
// Función para desordenar números
function desordenarNumeros(array) {
  for (let i = array.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [array[i], array[j]] = [array[j], array[i]];
  }
  return array;
}

const numerosDesordenados = desordenarNumeros(Array.from({ length: 10 }, (_, i) => i));

// Crear teclado numérico
function crearTecladoNumerico() {
  const teclado = document.getElementById("contenedorBotones");

  numerosDesordenados.forEach(numero => {
    const botonTeclado = document.createElement("button");
    botonTeclado.textContent = numero;
    botonTeclado.onclick = () => {
      numeroEmplazamiento(numero);
      botonTeclado.disabled = true;
    };
    teclado.appendChild(botonTeclado);
  });
}

// Colocar número en el hueco correspondiente
function numeroEmplazamiento(numero) {
  const emplazamientos = Array.from(tabla.children);
  for (const emplazamiento of emplazamientos) {
    if (emplazamiento.textContent === ".") {
      emplazamiento.textContent = numero;
      break;
    }
  }
  if (emplazamientos.every(empl => empl.textContent !== ".")) {
    validacionPin();
  }
}

// Validación del PIN
function validacionPin() {
  const pinIntroducido = Array.from(tabla.children)
    .map(empl => empl.textContent)
    .join("");

  if (pinIntroducido === claveCorrecta.join("")) {
    document.getElementById("esCorrecto").textContent =
      "Bienvenido a tu Área de Clientes";
  } else {
    document.getElementById("esCorrecto").textContent =
      "Clave incorrecta. Inténtalo de nuevo.";
  }
}

document.addEventListener("DOMContentLoaded", crearTecladoNumerico);
