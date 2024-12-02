let parrafos = document.querySelectorAll("p");
let iframe = document.getElementById("iframe");
let formulario = document.getElementById("formulario");


// Función que maneja el evento de formulario
formulario.addEventListener("submit", function(event) {
  event.preventDefault();
  const archivo = document.getElementById('archivo').files[0];

  if (archivo) {
    const url = URL.createObjectURL(archivo); // Crear una URL del archivo
    iframe.src = url; // Cargar el archivo en el iframe
  } else {
    alert('Por favor, selecciona un archivo.');
  }
});

// Función para obtener el contenido del documento (ya sea principal o del iframe)
function obtenerContenido() {
  return iframe.src ? iframe.contentDocument : document;
}

// Funciones para interactuar con el contenido del iframe o del documento principal
function contarParrafos() {
  const contenido = obtenerContenido();
  const parrafos = contenido.querySelectorAll("p");
  document.getElementById("resultado").innerHTML += "El total de párrafos es: " + parrafos.length + "<br>";
}

function textoSegundoParrafo() {
  const contenido = obtenerContenido();
  const parrafos = contenido.querySelectorAll("p");
  if (parrafos.length >= 2) {
    let textoSegundoParrafo2 = parrafos[1].textContent;
    document.getElementById("resultado").innerHTML += "Texto del segundo párrafo: " + textoSegundoParrafo2 + "<br>";
  }
}

function contarEnlaces() {
  const contenido = obtenerContenido();
  const enlaces = contenido.querySelectorAll("a");
  document.getElementById("resultado").innerHTML += "El número de enlaces es: " + enlaces.length + "<br>";
}

function primerEnlace() {
  const contenido = obtenerContenido();
  const primerEnlace = contenido.querySelector("a");
  if (primerEnlace) {
    document.getElementById("resultado").innerHTML += "El texto del primer enlace es: " + primerEnlace.textContent + "<br>";
  }
}

function penultimoEnlace() {
  const contenido = obtenerContenido();
  const enlaces = contenido.querySelectorAll("a");
  if (enlaces.length >= 2) {
    const penultimoEnlaceHref = enlaces[enlaces.length - 2].href;
    document.getElementById("resultado").innerHTML += "La dirección del penúltimo enlace es: " + penultimoEnlaceHref + "<br>";
  }
}

function enlacesMunicipio() {
  const contenido = obtenerContenido();
  const enlaces = contenido.querySelectorAll("a");
  let contador = 0;
  enlaces.forEach(enlace => {
    if (enlace.href.includes("/wiki/Municipio")) {
      contador++;
    }
  });
  document.getElementById("resultado").innerHTML += "El número de enlaces que apuntan a '/wiki/Municipio' es: " + contador + "<br>";
}

function enlacesPrimerParrafo() {
  const contenido = obtenerContenido();
  const enlacesPrimerParrafo = contenido.querySelector("p").querySelectorAll("a").length;
  document.getElementById("resultado").innerHTML += "El número de enlaces en el primer párrafo es: " + enlacesPrimerParrafo + "<br>";
}

function contarElementos() {
  const contenido = obtenerContenido();
  const parrafos = contenido.querySelectorAll("p");
  parrafos.forEach(parrafo => {
    console.log(parrafo.textContent);
  });
}

// Ejecutar funciones cuando el contenido del iframe esté completamente cargado
iframe.addEventListener("load", function() {
  contarParrafos();
  textoSegundoParrafo();
  contarEnlaces();
  primerEnlace();
  penultimoEnlace();
  enlacesMunicipio();
  enlacesPrimerParrafo();
  contarElementos();
});

// Ejecutar las funciones en el documento principal si el iframe no tiene contenido
if (!iframe.src) {
  contarParrafos();
  textoSegundoParrafo();
  contarEnlaces();
  primerEnlace();
  penultimoEnlace();
  enlacesMunicipio();
  enlacesPrimerParrafo();
  contarElementos();
}
    document.getElementById('formulario').addEventListener('submit', function(event) {
        event.preventDefault();
        const archivo = document.getElementById('archivo').files[0];
    
        if (archivo) {
          const url = URL.createObjectURL(archivo); // Crear una URL del archivo
          iframe.setAttribute("src",url) // Cargar el archivo en el iframe
        } else {
          alert('Por favor, selecciona un archivo.');
        }
      });