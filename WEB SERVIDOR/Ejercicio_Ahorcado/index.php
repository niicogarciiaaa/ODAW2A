<?php

function selecionarDificultad() { ?>
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
            <p>Selecciona Dificultad</p>
            <select name="dificultad" >
                <option value="" disabled selected>-- Selecciona una dificultad --</option>
                <option value="7">Fácil (7 Vidas)</option>
                <option value="6">Intermedio (6 Vidas)</option>
                <option value="5">Difícil (5 Vidas)</option>
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

if (count($_POST) == 0) {
    selecionarDificultad();
} elseif (isset($_POST['salir'])) {
    funcionsalir();
} if (isset($_POST['jugar'])) {
    $vidas = $_POST['dificultad'];
    jugar($vidas,"supercalifragilisticioespialidoso"); // Asegúrate de pasar la palabra
}

function jugar($vidas, $palabra) {
    // Inicializamos variables
    $letrasAdivinadas = isset($_POST['letrasAdivinadas']) ? explode(',', $_POST['letrasAdivinadas']) : [];
    
    if (isset($_POST['letra'])) {
        $letra = strtolower($_POST['letra']);
        if (strlen($letra) != 1) {
            echo "Por favor, introduce solo una letra.<br/>";
        } elseif (in_array($letra, $letrasAdivinadas)) {
            echo "Ya has adivinado esa letra. Prueba otra.<br/>";
        } else {
            $letrasAdivinadas[] = $letra;
            if (strpos($palabra, $letra) === false) {
                $vidas--;
                echo "Incorrecto. Te quedan $vidas vidas.<br/>";
            } else {
                echo "Correcto.<br/>";
            }
        }
    }

    echo "<h2>¡Comienza el juego!</h2>";
    echo "<p>Tienes $vidas vidas.</p>";
    echo "<p>Palabra a adivinar: " . mostrarPalabra($palabra, $letrasAdivinadas) . "</p>";

    if ($vidas > 0) {
        echo '<form method="POST" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">';
        echo '<input type="hidden" name="dificultad" value="' . $vidas . '">';
        echo '<input type="hidden" name="letrasAdivinadas" value="' . implode(',', $letrasAdivinadas) . '">';
        echo '<input type="text" name="letra" maxlength="1" required>';
        echo '<input type="submit" value="Adivinar">';
        echo '</form>';
    } else {
        echo "¡Has perdido! La palabra era: $palabra.";
    }

    // Comprobar si el jugador ha ganado
    if (comprobarVictoria($palabra, $letrasAdivinadas)) {
        echo "¡Felicidades, has adivinado la palabra: $palabra!";
    }
}

function mostrarPalabra($palabra, $letrasAdivinadas) {
    $resultado = "";
    for ($i = 0; $i < strlen($palabra); $i++) {
        $letra = $palabra[$i];
        $resultado .= in_array($letra, $letrasAdivinadas) ? $letra : "_ ";
    }
    return $resultado;
}

function comprobarVictoria($palabra, $letrasAdivinadas) {
    foreach (str_split($palabra) as $letra) {
        if (!in_array($letra, $letrasAdivinadas)) {
            return false;
        }
    }
    return true;
}

?>
