import { Cliente } from "./ejercicio10.js";
const clientes = [
    new Cliente("12345678A", "2000-01-01", [1, 2, 3, 4]), // Ejemplo de cliente
    new Cliente("87654321B", "1990-05-15", [5, 6, 7, 8]), // Ejemplo de cliente
    new Cliente("23456789C", "1985-09-30", [9, 0, 1, 2]), // Ejemplo de cliente
  ];
function seleccionarClaveAleatoria() {
    const clienteAleatorio =
      clientes[Math.floor(Math.random() * clientes.length)];
    return clienteAleatorio.clave; // Devuelve la clave del cliente seleccionado
  }
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
    
    // Crear la primera fila de botones
    const filaBotones1 = document.createElement("div");
    filaBotones1.classList.add("fila-botones");
    for (let j = 0; j < 5; j++) {
      const numero = numerosDesordenados[j]; // Obtener el número correspondiente
      const btn = document.createElement("button");
      btn.textContent = numero;
      btn.style.color = "#FF6200"; // Asignar el color del texto a naranja
      btn.onclick = function () {
        agregarNumeroAlHueco(numero);
        btn.disabled = true; // Deshabilitar el botón después de que se haya hecho clic
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
        btn.disabled = true; // Deshabilitar el botón después de que se haya hecho clic
      };
      filaBotones2.appendChild(btn);
    }
    container.appendChild(filaBotones2); // Agregar la segunda fila al contenedor
  }
  
  // Función para agregar el número al hueco
  // Función para agregar el número al hueco
  function agregarNumeroAlHueco(numero) {
    const huecosContainer = document.getElementById("huecosContainer");
    const huecos = huecosContainer.children; // Obtener todos los elementos hijos (los huecos)
    let numeroColocado = false;
  
    // Buscar el primer hueco vacío y colocar el número
    for (let i = 0; i < huecos.length; i++) {
      const hueco = huecos[i];
  
      if (hueco.textContent === ".") {
        hueco.textContent = numero; // Colocar el número en el hueco
        numeroColocado = true;
        break; // Salir del bucle después de colocar el número
      }
    }
  
    // Verificar si todos los huecos están llenos sin usar Array.from o querySelectorAll
    let todosLlenos = true; // Suponemos que todos están llenos
    for (let i = 0; i < huecos.length; i++) {
      if (huecos[i].textContent === ".") {
        todosLlenos = false; // Si encontramos un hueco vacío, cambiamos la variable
        break; // Salimos del bucle si encontramos un hueco vacío
      }
    }
  
    // Si todos los huecos están llenos, validamos la clave
    if (todosLlenos) {
      validarClave(); // Llamar a la función de validación automáticamente
    }
  }
  console.log(claveCorrecta)
  // Función para validar la clave
  function validarClave() {
    const huecosContainer = document.getElementById("huecosContainer");
    const huecos = huecosContainer.children;
    let claveIngresada = "";
  
    // Construir la clave ingresada a partir de los contenidos de los huecos
    for (let i = 0; i < huecos.length; i++) {
      claveIngresada += (huecos[i].textContent === ".") ? "?" : huecos[i].textContent; // Usar ? si el hueco está vacío
    }
  
    // Comparar la clave ingresada con la clave correcta
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
  
  // Función para mezclar los números
  function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [array[i], array[j]] = [array[j], array[i]];
    }
    return array;
  }
  