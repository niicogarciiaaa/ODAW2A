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

    if (empty($_POST)) {
        $random = mt_rand(0, count($adivinanza) - 1);
        $pregunta = $adivinanza[$random][0];
        impForm($pregunta);
    } else {
        // Obtener la pregunta y la respuesta del formulario
        $pregunta = $_POST['pregunta'];
        $respuesta = $_POST['palabraI'];
        

        // Buscar la respuesta correcta en el array
        foreach ($adivinanza as $item) {
            if ($item[0] === $pregunta) {
                $correcta = $item[1];
                break;
            }
        }

        // Verificar si la respuesta es correcta
        if (strtolower(trim($respuesta)) === strtolower(trim($correcta))) {
            echo "<p>¡Correcto! La respuesta es: $correcta</p>";
            $random = mt_rand(0, count($adivinanza) - 1);
            $pregunta = $adivinanza[$random][0];
            impForm($pregunta);
        } else {
            echo 'Respuesta Incorrecta';
            echo impForm($pregunta);
        }
    }

    function impForm($pregunta) {
        echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="POST">';
        echo $pregunta;
        echo '<p>Palabra: <input type="text" name="palabraI"></p>';
        echo '<input type="hidden" name="pregunta" value="' . htmlspecialchars($pregunta) . '">';
        echo '<p><input type="submit" value="Enviar"></p>';
        echo '</form>';
    }
    ?>
</body>
</html>
