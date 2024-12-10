
    const paleta = document.getElementById("paleta");
    const zonadibujo = document.getElementById("zonadibujo");
    const pincel = document.getElementById("pincel");

    let colorSeleccionado = "color1"; // Color inicial
    let pintar = false; // Estado del pincel

    // Actualiza el texto del estado del pincel
    const actualizarEstadoPincel = () => {
        pincel.textContent = pintar ? "PINCEL ACTIVADO..." : "PINCEL DESACTIVADO...";
    };

    // Maneja la selección de color en la paleta
    paleta.addEventListener("click", (event) => {
        if (event.target.tagName === "TD") {
            document.querySelector(".seleccionado")?.classList.remove("seleccionado");
            event.target.classList.add("seleccionado");
            colorSeleccionado = event.target.className; // Guardar el color seleccionado
        }
    });

    // Crea el tablero de dibujo
    const crearTablero = () => {
        const table = document.createElement("table");
        table.className = "tablerodibujo";

        for (let i = 0; i < 30; i++) {
            const row = document.createElement("tr");
            for (let j = 0; j < 30; j++) {
                const cell = document.createElement("td");

                // Eventos para pintar
                cell.addEventListener("mousedown", () => {pintar = true
                    actualizarEstadoPincel();
                });
                cell.addEventListener("mouseenter", () => {
                    if (pintar) cell.className = colorSeleccionado;
                });

                row.appendChild(cell);
            }
            table.appendChild(row);
        }
        zonadibujo.appendChild(table);
    };

    // Detiene el pincel al soltar el mouse
    document.addEventListener("mouseup", () => {pintar = false
        actualizarEstadoPincel();
    });

    actualizarEstadoPincel();
    crearTablero();