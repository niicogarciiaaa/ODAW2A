<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Adivinanzas</title>
</head>
<body>
    <h2>Adivinanzas</h2>
    

    <?php
    $adivinanza[0][0] = "¿Qué cosa es que cuanto más le quitas más grande es?";
    $adivinanza[0][1] = "Agujero";
    $adivinanza[1][0] = "No muerde ni ladra, pero tiene dientes y la casa guarda. ¿Qué es?";
    $adivinanza[1][1] = "Llave";
    $adivinanza[2][0] = "¿Cuál es el instrumento que se mete y deja líquido dentro?";
    $adivinanza[2][1] = "Jeringa";

    // Inicializar intentos si no se ha enviado el formulario
// Inicializar intentos si no se ha enviado el formulario
if (empty($_POST)) {
    $random = mt_rand(0, count($adivinanza) - 1);
    $pregunta = $adivinanza[$random][0];
    $intentos = 0;
    impForm($pregunta, $intentos);
} else {
    // Obtener la pregunta y la respuesta del formulario
    $pregunta = $_POST['pregunta'];
    $respuesta = $_POST['palabraI'];
    // Verificar si la clave 'intentos' está definida
    $intentos = isset($_POST['intentos']) ? (int)$_POST['intentos'] : 0;

    // Buscar la respuesta correcta en el array
    foreach ($adivinanza as $item) {
        if ($item[0] === $pregunta) {
            $correcta = $item[1];
            break;
        }
    }

    // Verificar si la respuesta es correcta
    if (strtolower(trim($respuesta)) === strtolower(trim($correcta))) {
        echo "<p>¡Has acertado! La respuesta es: $correcta</p>";
        // Generar una nueva adivinanza
        $random = mt_rand(0, count($adivinanza) - 1);
        $pregunta = $adivinanza[$random][0];
        $intentos = 0; // Reiniciar intentos
        impForm($pregunta, $intentos);
    } else {
        echo "<p>Incorrecto</p>";
        $intentos++; // Incrementar intentos

        // Mostrar la pregunta si no se han agotado los intentos
        if ($intentos < 6) {
            impForm($pregunta, $intentos);
        } else {
            echo "<p>Has agotado tus intentos. ¡Intenta de nuevo!</p>";
            $random = mt_rand(0, count($adivinanza) - 1);
            $pregunta = $adivinanza[$random][0];
            $intentos = 0; // Reiniciar intentos
            impForm($pregunta, $intentos);
        }
    }
}

function impForm($pregunta, $intentos) {
    echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="POST">';
    echo $pregunta;
    echo '<p>Palabra: <input type="text" name="palabraI"></p>';
    echo '<input type="hidden" name="pregunta" value="' . htmlspecialchars($pregunta) . '">';
    echo '<input type="hidden" name="intentos" value="' . $intentos . '">'; // Asegúrate de pasar el número de intentos
    echo '<p><input type="submit" value="Enviar"></p>';
    echo '</form>';
}

    ?>
</body>
</html>
