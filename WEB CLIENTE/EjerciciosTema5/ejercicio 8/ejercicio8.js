function calcularResultado() {
    const resultado = document.getElementById("resultado");
    let aciertos = 0;
    let preguntasSinResponder = false;

    // Reiniciar estilos y mensajes previos
    for (let i = 1; i <= 4; i++) {
        const preguntaDiv = document.getElementById(`pregunta${i}`);
        preguntaDiv.classList.remove("sin-responder");
        const icono = preguntaDiv.querySelector(".icono");
        if (icono) icono.remove();
    }

    // Validar cada pregunta
    for (let i = 1; i <= 4; i++) {
        const opciones = document.querySelectorAll(`input[name="P${i}"]`);
        let respondida = false;
        let esCorrecta = false;

        opciones.forEach((opcion) => {
            if (opcion.checked) {
                respondida = true;
                if (opcion.value === "correcto") esCorrecta = true;
            }
        });

        const preguntaDiv = document.getElementById(`pregunta${i}`);

        if (!respondida) {
            // Pregunta sin responder
            preguntasSinResponder = true;
            preguntaDiv.classList.add("sin-responder");
        } else if (esCorrecta) {
            // Respuesta correcta
            aciertos++;
            preguntaDiv.innerHTML += "<span class='icono correcto'>✔️</span>";
        } else {
            // Respuesta incorrecta
            preguntaDiv.innerHTML += "<span class='icono incorrecto'>❌</span>";
        }
    }
    // Mostrar resultados
    if (preguntasSinResponder) {
        resultado.textContent = "No has respondido a todas las preguntas.";
        resultado.className = "incorrecto";
    } else {
        resultado.textContent = `Has acertado ${aciertos} preguntas.`;
        resultado.className = aciertos === 4 ? "correcto" : "incorrecto";
    }
}