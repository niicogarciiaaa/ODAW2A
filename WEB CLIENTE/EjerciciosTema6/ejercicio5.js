 // Función para crear un párrafo con el texto y el color seleccionado
 function crearParrafo() {
    // Crear el elemento de párrafo
    var parrafo = document.createElement("p");

    // Obtener el texto del textarea
    if(document.getElementById("texto").value != ""){
    var texto = document.createTextNode(document.getElementById("texto").value);
    parrafo.appendChild(texto);
    }else{
        alert("no se puede crear un párrafo vacío")
    }
    // Obtener el valor del select para el color
    const select = document.getElementById("colores");
    const valorSeleccionado = select.value; // Obtiene el valor de la opción seleccionada

    // Añadir el color como clase al párrafo
    parrafo.classList.add(valorSeleccionado);

    // Añadir el párrafo al contenedor
    var cont = document.getElementById("div1");
    cont.appendChild(parrafo);
}

// Añadir el evento al botón
document.getElementById("crearParrafo").addEventListener("click", function(event) {
    event.preventDefault(); // Evitar que recargue la página
    crearParrafo(); // Llamar a la función para crear el párrafo
});