function calcularLetraControl() {
    const input = document.getElementById("numero").value.toUpperCase();
    let numero;

    // Validar NIF
    if (/^\d{8}$/.test(input)) { // Formato NIF: 8 dígitos
        numero = input;
    }
    // Validar NIE
    else if (/^[XYZ]\d{7}$/.test(input)) { // Formato NIE: letra + 7 dígitos
        numero = input.replace(/^X/, '0').replace(/^Y/, '1').replace(/^Z/, '2'); // Reemplazar letra inicial
    } else {
        alert("Introduce un NIF o NIE válido");
        return;
    }

    // Calcular la letra de control
    const tablaLetras = "TRWAGMYFPDXBNJZSQVHLCKE";
    const resto = numero % 23;
    const letraControl = tablaLetras.charAt(resto);

    // Mostrar la letra de control en el campo de entrada
    document.getElementById("letraControl").value = letraControl;
}

