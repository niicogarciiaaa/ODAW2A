class Cliente {
    constructor(dni, fechaNacimiento, clave) {
        this.dni = dni;
        this.fechaNacimiento = fechaNacimiento;
        this.clave = clave;
    }
}

// Datos simulados de clientes
const clientes = [
    new Cliente("12345678A", "1980-05-12", "1234"),
    new Cliente("87654321B", "1975-10-22", "5678"),
];

// Variables para guardar elementos y datos
const dniField = document.getElementById("dni");
const fechaNacimientoField = document.getElementById("fechaNacimiento");
const claveField = document.getElementById("clave");
const recordarCheckbox = document.getElementById("recordar");
const loginForm = document.getElementById("loginForm");
const validacionClaveDiv = document.getElementById("validacionClave");
const tablaClave = document.getElementById("tablaClave");

document.addEventListener("DOMContentLoaded", () => {
    // Cargar datos del localStorage si existen
    if (localStorage.getItem("dni")) {
        dniField.value = localStorage.getItem("dni");
        fechaNacimientoField.value = localStorage.getItem("fechaNacimiento");
        recordarCheckbox.checked = true;
    }

    // Validación y acceso
    loginForm.addEventListener("submit", (event) => {
        event.preventDefault();

        const dni = dniField.value;
        const fechaNacimiento = fechaNacimientoField.value;
        const clave = claveField.value;

        // Buscar cliente en la base simulada
        const cliente = clientes.find(c => c.dni === dni && c.fechaNacimiento === fechaNacimiento && c.clave === clave);

        if (cliente) {
            if (recordarCheckbox.checked) {
                localStorage.setItem("dni", dni);
                localStorage.setItem("fechaNacimiento", fechaNacimiento);
            } else {
                localStorage.removeItem("dni");
                localStorage.removeItem("fechaNacimiento");
            }

            mostrarValidacionClave(cliente);
        } else {
            alert("Datos incorrectos. Inténtelo de nuevo.");
        }
    });
});
// Mostrar la ventana de validación de clave y generar los números en posiciones aleatorias
function mostrarValidacionClave(cliente) {
    loginForm.classList.add("hidden"); // Oculta el formulario de login
    validacionClaveDiv.classList.remove("hidden"); // Muestra la ventana de validación de clave

    // Genera números del 0 al 9 en orden aleatorio
    const numeros = Array.from({ length: 10 }, (_, i) => i.toString());
    numeros.sort(() => Math.random() - 0.5);

    // Clave parcial con espacios en blanco en posiciones aleatorias
    let claveParcial = cliente.clave.split('');
    const posicionesFaltantes = [0, 1, 2, 3].sort(() => Math.random() - 0.5).slice(0, 2);

    posicionesFaltantes.forEach(pos => claveParcial[pos] = "_"); // Espacios aleatorios para completar la clave
    document.getElementById("claveParcial").textContent = claveParcial.join(" "); // Muestra clave parcial

    // Genera la tabla de números
    tablaNumeros.innerHTML = numeros
        .map(numero => `<button onclick="completarClave('${numero}', '${cliente.clave}', ${JSON.stringify(posicionesFaltantes)})">${numero}</button>`)
        .join("");
}

let claveIngresada = []; // Arreglo para almacenar los números seleccionados

// Función para completar los números de la clave faltantes
function completarClave(numero, claveCorrecta, posicionesFaltantes) {
    if (claveIngresada.length < posicionesFaltantes.length) {
        claveIngresada.push(numero); // Añadir número seleccionado a la clave ingresada
        actualizarClaveParcial(numero, posicionesFaltantes.shift());

        if (claveIngresada.length === 2) { // Cuando se completan los huecos
            validarClave(claveIngresada.join(""), claveCorrecta);
        }
    }
}

// Actualiza la visualización de la clave parcial
function actualizarClaveParcial(numero, posicion) {
    const claveDisplay = document.getElementById("claveParcial").textContent.split(" ");
    claveDisplay[posicion] = numero;
    document.getElementById("claveParcial").textContent = claveDisplay.join(" ");
}

// Valida la clave ingresada comparándola con la clave correcta del cliente
function validarClave(claveIngresada, claveCorrecta) {
    const claveCompleta = claveCorrecta.replace("_", claveIngresada);
    if (claveCompleta === claveCorrecta) {
        alert("¡Bienvenido a su cuenta!");
    } else {
        alert("Clave incorrecta. Inténtelo de nuevo.");
        location.reload(); // Reinicia para otro intento
    }
}