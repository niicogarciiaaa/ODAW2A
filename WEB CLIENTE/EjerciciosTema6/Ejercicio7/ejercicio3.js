document.addEventListener("DOMContentLoaded", function () {
    const discos = []; // Array para almacenar los discos
    let ultimoDiscoAgregado = null; // Referencia al último disco añadido

    // Crear el formulario
    const formulario = document.createElement("form");
    formulario.id = "formularioDiscos";

    function crearElemento(tag, atributos = {}, texto = "") {
        const elemento = document.createElement(tag);
        for (const [clave, valor] of Object.entries(atributos)) {
            elemento[clave] = valor;
        }
        if (texto) elemento.textContent = texto;
        return elemento;
    }

    // Crear campos del formulario
    formulario.appendChild(crearElemento("label", { id: "nombreDiscoLabel", for: "nombreDisco" }, "Nombre del Disco:"));
    
    formulario.appendChild(crearElemento("input", { id: "nombreDisco", type: "text"}));

    formulario.appendChild(crearElemento("label", { id: "grupoLabel", for: "grupo" }, "Grupo de Música o Cantante:"));
    formulario.appendChild(crearElemento("input", { id: "grupo", type: "text"}));

    formulario.appendChild(crearElemento("label", { id: "anioLabel", for: "anio" }, "Año de Publicación:"));
    formulario.appendChild(crearElemento("input", { id: "anio", type: "text"}));

    formulario.appendChild(crearElemento("label", { id: "tipoMusicaLabel", for: "tipoMusica" }, "Tipo de Música:"));
    const select = crearElemento("select", { id: "tipoMusica" });
    ["Rock", "Pop", "Punk", "Indie"].forEach(tipo => {
        const opcion = crearElemento("option", { value: tipo }, tipo);
        select.appendChild(opcion);
    });
    formulario.appendChild(select);

    formulario.appendChild(crearElemento("label", { id: "localizacionLabel", for: "localizacion" }, "Localización (número de estantería):"));
    formulario.appendChild(crearElemento("input", { id: "localizacion", type: "text" }));

    formulario.appendChild(crearElemento("label", { id: "prestadoLabel", for: "prestado" }, "Prestado:"));
    formulario.appendChild(crearElemento("input", { id: "prestado", type: "checkbox" }));

    formulario.appendChild(crearElemento("button", { type: "submit" }, "Guardar Disco"));

    document.body.appendChild(formulario);

    const tabla = document.createElement("table");
    tabla.id = "tablaDiscos";
    const encabezado = crearElemento("tr");
    ["Nombre del Disco", "Grupo/Cantante", "Año", "Tipo de Música", "Localización", "Prestado"].forEach(titulo => {
        encabezado.appendChild(crearElemento("th", {}, titulo));
    });
    tabla.appendChild(encabezado);
    document.body.appendChild(tabla);

    formulario.addEventListener("submit", function (event) {
        event.preventDefault();

        const nombreDisco = document.getElementById("nombreDisco").value.trim();
        const grupo = document.getElementById("grupo").value.trim();
        const anio = document.getElementById("anio").value.trim();
        const tipoMusica = document.getElementById("tipoMusica").value.trim();
        const localizacion = document.getElementById("localizacion").value.trim();
        const prestado = document.getElementById("prestado").checked;

        if (!validarFormulario(nombreDisco, grupo, anio, localizacion)) {
            return;
        }

        // Añadir disco al array
        const nuevoDisco = { nombreDisco, grupo, anio, tipoMusica, localizacion, prestado };
        discos.push(nuevoDisco);
        ultimoDiscoAgregado = nuevoDisco;

        // Ordenar discos alfabéticamente
        discos.sort((a, b) => a.nombreDisco.localeCompare(b.nombreDisco));

        // Actualizar la tabla
        actualizarTabla();

        // Limpiar el formulario
        formulario.reset();
    });

    function validarFormulario(nombreDisco, grupo, anio, localizacion) {
        let esValido = true;

        if (nombreDisco === "" || nombreDisco.length > 20) esValido = false;
        if (grupo === "" || grupo.length > 20) esValido = false;
        if (anio.length !== 4 || isNaN(anio)) esValido = false;
        if (localizacion !== "" && isNaN(localizacion)) esValido = false;

        return esValido;
    }

    function actualizarTabla() {
        // Limpiar tabla (excepto encabezado)
        const filas = tabla.querySelectorAll("tr:not(:first-child)");
        filas.forEach(fila => fila.remove());

        // Agregar discos alfabéticamente
        discos.forEach(disco => {
            const fila = crearElemento("tr", {
                className: disco === ultimoDiscoAgregado ? "nuevo-disco" : ""
            });
            fila.appendChild(crearElemento("td", {}, disco.nombreDisco));
            fila.appendChild(crearElemento("td", {}, disco.grupo));
            fila.appendChild(crearElemento("td", {}, disco.anio));
            fila.appendChild(crearElemento("td", {}, disco.tipoMusica));
            fila.appendChild(crearElemento("td", {}, disco.localizacion));
            fila.appendChild(crearElemento("td", {}, disco.prestado ? "Sí" : "No"));
            tabla.appendChild(fila);
        });
    }
});
