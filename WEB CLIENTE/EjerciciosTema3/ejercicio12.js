let ventanaEmergente = null; // Inicializa la variable como null

function abrirVentanaEmergente() {
    // Abrir la ventana emergente
    ventanaEmergente = window.open("", "Ventana Emergente", "width=400,height=200");
    
    // Comprobar si la ventana se ha abierto
    if (ventanaEmergente) {
        // Escribir contenido en la ventana emergente
        ventanaEmergente.document.write("Hola, ventana abierta correctamente");

        // Cerrar la ventana emergente automáticamente después de 3 segundos
        setTimeout(cerrarVentanaEmergente, 3000);
    } else {
        alert("La ventana emergente no se pudo abrir. Puede que un bloqueador de ventanas emergentes esté activo.");
    }
}

function cerrarVentanaEmergente() {
    if (ventanaEmergente && !ventanaEmergente.closed) {
        ventanaEmergente.close(); // Cierra la ventana emergente si está abierta
    }
}