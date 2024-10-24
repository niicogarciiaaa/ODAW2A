window.addEventListener('load',asignarEventos,false);

function asignarEventos(){
    const input = document.getElementById("miInput");

    input.addEventListener("keydown", function(event) {
        console.log("Tecla presionada:", event.key);  // Muestra la tecla presionada (por ejemplo, "a", "Enter")
        console.log("ID:", event.target.id)
        console.log("Código de la tecla:", event.code);  // Muestra el código físico de la tecla (por ejemplo, "KeyA")
    });
}
