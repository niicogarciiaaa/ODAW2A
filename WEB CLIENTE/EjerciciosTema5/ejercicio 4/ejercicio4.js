// Array con los números del sorteo en orden normal
const numerosSorteo = [5, 16, 23, 34, 42];
// Array con los números en el orden de aparición
const numerosAparicion = [34, 5, 23, 42, 16];

// document.getElementById("numeros");
// const textoOrdenar = document.getElementById("ordenar");

// Función para mostrar los números en pantalla
function mostrarNumeros(numeros) {
  // Convertir el array de números en una cadena y mostrarla en el contenedor
  document.getElementById("numeros").innerHTML = numeros.join(" - ");
}

// Mostrar los números en el orden normal inicialmente
mostrarNumeros(numerosSorteo);

// Evento para cambiar los números por el orden de aparición
document.getElementById("ordenar").addEventListener("mouseover", function () {
  mostrarNumeros(numerosAparicion);
});

// Evento para volver a mostrar los números en el orden normal
document.getElementById("ordenar").addEventListener("mouseout", function () {
  mostrarNumeros(numerosSorteo);
});
