// Fecha actual en milisegundos
let diaHoy = Date.now();

// Fecha de fin de curso (22 de junio de 2024, mes 5 en JS)
let finCurso = new Date(2025, 5, 22)// Junio es el mes 5

// Constante para milisegundos por día
const MILISEGUNDOSDIA = (1000 * 60 * 60 * 24);

// Calcula la diferencia en días
let diasRestantes =Math.ceil((finCurso-diaHoy) / MILISEGUNDOSDIA);

// Muestra el resultado en el elemento con id "resultado"
document.getElementById("resultado").innerHTML = `${diasRestantes} días restantes hasta el fin de curso.`;
