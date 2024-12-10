document.addEventListener("DOMContentLoaded", () => {
    const paleta = document.getElementById("paleta");
    const zonadibujo = document.getElementById("zonadibujo");
    const pincel = document.getElementById("pincel");

    let colorSeleccionado = "color1"; // Color inicial del pincel
    let pintar = false; // Estado del pincel (desactivado por defecto)

    // Actualizar el estado del pincel
    const actualizarEstadoPincel = () => {
        pincel.textContent = pintar ? "PINCEL ACTIVADO..." : "PINCEL DESACTIVADO...";
    };

    // Seleccionar un color al hacer clic en la paleta
    paleta.addEventListener("click", (event) => {
        if (event.target.tagName === "TD") {
            // Quitar la clase 'seleccionado' de cualquier color activo
            document.querySelectorAll("#paleta td").forEach((td) => td.classList.remove("seleccionado"));

            // Añadir la clase 'seleccionado' al color clicado
            event.target.classList.add("seleccionado");

            // Guardar el color seleccionado
            colorSeleccionado = event.target.classList[0];
        }
    });

    // Crear el tablero de dibujo dinámicamente
    const crearTablero = () => {
        const table = document.createElement("table");
        table.className = "tablerodibujo";

        for (let i = 0; i < 30; i++) {
            const row = document.createElement("tr");
            for (let j = 0; j < 30; j++) {
                const cell = document.createElement("td");

                // Añadir eventos para activar/desactivar el pincel y pintar
                cell.addEventListener("mousedown", () => {
                    pintar = !pintar; // Cambiar el estado del pincel
                    actualizarEstadoPincel(); // Actualizar el estado mostrado
                    if (pintar) {
                        cell.className = colorSeleccionado; // Pintar la celda inicial
                    }
                });

                cell.addEventListener("mouseenter", () => {
                    if (pintar) {
                        cell.className = colorSeleccionado; // Pintar al pasar el ratón
                    }
                });

                row.appendChild(cell);
            }
            table.appendChild(row); 
        }

        zonadibujo.appendChild(table); // Añadir el tablero al div 'zonadibujo'
    };

    crearTablero();

   
    document.addEventListener("mouseup", () => {
        pintar = false;
        actualizarEstadoPincel();
    });

    actualizarEstadoPincel();
});
