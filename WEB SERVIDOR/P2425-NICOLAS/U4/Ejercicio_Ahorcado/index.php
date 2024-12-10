<?php

function selecionarDificultad($nombre = '', $dificultad = '') { ?>
    <html>
        <style>
            body {
                background-color: gray;
            }
            form {
                text-align: center;
            }
            img {
                height: 100px;
                margin-bottom: 100px;
            }
            p {
                color: white;
            }
            input {
                margin-top: 10px;
            }
        </style>
        <body>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <img src="./ahorcado.png" alt=""><br/>
                <p>Introduce tu nombre:</p>
                <input type="text" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>" ><br>
                <p>Selecciona Dificultad</p>
                <select name="dificultad" required>
                    <option value="" disabled <?php if ($dificultad == "") echo "selected"; ?>>-- Selecciona una dificultad --</option>
                    <option value="7" <?php if ($dificultad == "7") echo "selected"; ?>>Fácil (7 Vidas)</option>
                    <option value="6" <?php if ($dificultad == "6") echo "selected"; ?>>Intermedio (6 Vidas)</option>
                    <option value="5" <?php if ($dificultad == "5") echo "selected"; ?>>Difícil (5 Vidas)</option>
                </select>
                <br>
                <input type="submit" value="Jugar" name="jugar">
                <input type="submit" value="Salir" name="salir">
            </form>
        </body>       
    </html>
<?php
}

function funcionsalir() { ?>
    <h1>¡Hasta Luego!</h1>
<?php
}

// Lista de palabras

$palabras = [
    "supercalifragilisticioespialidoso", "esternocleidomastoideo", "javascript", "desarrollo", "programación",
    "matriz", "array", "html", "css", "php",
    "backend", "frontend", "tecnología", "ordenador", "internet",
    "algoritmo", "función", "variable", "bucle", "condicional",
    "sistema", "red", "software", "hardware", "diseño",
    "noruega", "seguridad", "programador", "suecia", "versatilidad",
    "creatividad", "análisis", "implementación", "solución", "estructura",
    "ingeniería", "documentación", "especificación", "metodología", "teorema",
    "optimizaciín", "compilador", "simulación", "modelo", "excepción",
    "interfaz", "funcionalidad", "interactividad", "experiencia", "usuario"
];
// Verificar si hay cookies
$nombre = isset($_COOKIE['nombre']) ? $_COOKIE['nombre'] : '';
$dificultad = isset($_COOKIE['dificultad']) ? $_COOKIE['dificultad'] : '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['salir'])) {
        funcionsalir();
    } elseif (isset($_POST['jugar'])) {
        $nombre = htmlspecialchars($_POST['nombre']); // Sanear la entrada
        $vidas = $_POST['dificultad'];
        setcookie("nombre", $nombre, time() + (7 * 24 * 60 * 60)); // Cookie expira en una semana
        setcookie("dificultad", $vidas, time() + (7 * 24 * 60 * 60)); // Cookie expira en una semana
        $palabraSeleccionada = $palabras[array_rand($palabras)];
        jugar($vidas, $palabraSeleccionada, [], $nombre);
    } else {
        // Procesar letras adivinadas
        $vidas = $_POST['vidas'];
        $palabraSeleccionada = $_POST['palabraSeleccionada'];
        $letrasAdivinadas = explode(',', $_POST['letrasAdivinadas']);
        $letra = strtolower($_POST['letra']);
        $letra = normalizarVocales($letra);

        // Validar la letra
        if (mb_strlen($letra) != 1 || in_array($letra, array_map('normalizarVocales', $letrasAdivinadas))) {
            echo "Por favor, introduce solo una letra válida.<br/>";
        } else {
            $letrasAdivinadas[] = $letra; // Agregar letra adivinada
            if (strpos(normalizarVocales($palabraSeleccionada), $letra) === false) {
                $vidas--; // Restar vida si es incorrecto
            }
            jugar($vidas, $palabraSeleccionada, $letrasAdivinadas, $nombre);
        }
    }
} else {
    selecionarDificultad($nombre, $dificultad);
}

function jugar($vidas, $palabra, $letrasAdivinadas = [], $nombre = '') {
    // Normaliza la palabra seleccionada
    $palabraNormalizada = normalizarVocales($palabra);

    echo "<div style='text-align: center;'>";
    if ($nombre) {
        echo "<h2>¡Bienvenido de nuevo, " . htmlspecialchars($nombre) . "!</h2>";
    }
    echo "<h2>¡Comienza el juego!</h2>";
    echo "<p>Tienes $vidas vidas.</p>";
    echo "<p>Palabra a adivinar: " . mostrarPalabra($palabraNormalizada, $letrasAdivinadas) . "</p>";

    if ($vidas > 0) {
        if (comprobarVictoria($palabraNormalizada, $letrasAdivinadas)) {
            echo "¡Felicidades, has adivinado la palabra: $palabra!";
            return;
        }

        echo '<form method="POST" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">';
        echo '<input type="hidden" name="vidas" value="' . $vidas . '">';
        echo '<input type="hidden" name="palabraSeleccionada" value="' . $palabra . '">';
        echo '<input type="hidden" name="letrasAdivinadas" value="' . implode(',', $letrasAdivinadas) . '">';
        echo '<input type="text" name="letra" maxlength="1" required>';
        echo '<input type="submit" value="Adivinar">';
        echo '</form>';
    } else {
        echo "¡Has perdido! La palabra era: $palabra.";
    }
    echo "</div>";
}

function mostrarPalabra($palabra, $letrasAdivinadas) {
    $resultado = "";
    $palabraNormalizada = normalizarVocales($palabra);
    $letrasAdivinadasNormalizadas = array_map('normalizarVocales', $letrasAdivinadas);

    foreach (str_split($palabraNormalizada) as $letra) {
        $resultado .= in_array($letra, $letrasAdivinadasNormalizadas) ? $letra . " " : "_ ";
    }
    return trim($resultado);
}

function comprobarVictoria($palabra, $letrasAdivinadas) {
    $letrasAdivinadasNormalizadas = array_map('normalizarVocales', $letrasAdivinadas);
    foreach (str_split(normalizarVocales($palabra)) as $letra) {
        if (!in_array($letra, $letrasAdivinadasNormalizadas)) {
            return false;
        }
    }
    return true;
}



function normalizarVocales($texto) {
    $tildes = array("á", "é", "í", "ó", "ú");
    $noTildes = array("a", "e", "i", "o", "u");
    return str_replace($tildes, $noTildes, $texto);
}

?>