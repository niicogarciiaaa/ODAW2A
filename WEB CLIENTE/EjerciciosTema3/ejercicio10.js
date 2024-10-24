 
 function redirigirError() {
    
    const confirmar = confirm("Ocurrió un error. ¿Quieres ir a la página de error personalizada?");

    
    if (confirmar) {
        
        window.location.href = "pagina_error.html"; // Cambia a la URL de tu página de error
    } else {
        
        document.body.innerHTML = "<h1>Error</h1><p>Ocurrió un error. Por favor, intenta nuevamente más tarde.</p>";
    }
}
