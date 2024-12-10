<?php
// Función para seleccionar una palabra aleatoria
function obtener_palabra() {
    $palabras = ["manzana", "elefante", "coche", "programacion", "futbol", "computadora", "internet"];
    return $palabras[array_rand($palabras)];
}

// Inicialización de variables
$vidas = 0;
$palabra = "";
$nombre = "";
$mensaje_bienvenida = "";

// Leer cookies si existen
if (isset($_COOKIE['nombre']) && isset($_COOKIE['nivel'])) {
    $nombre = $_COOKIE['nombre'];
    $nivel = $_COOKIE['nivel'];
    $mensaje_bienvenida = "Bienvenido de nuevo, $nombre. Nivel: $nivel";
} else {
    // Leer datos del formulario
    $nivel = isset($_POST['nivel']) ? $_POST['nivel'] : 'facil';
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    
    // Guardar cookies por una semana
    setcookie('nombre', $nombre, time() + 604800); // 1 semana
    setcookie('nivel', $nivel, time() + 604800);
}

// Asignar vidas según el nivel de dificultad
switch ($nivel) {
    case 'intermedio':
        $vidas = 6;
        break;
    case 'dificil':
        $vidas = 5;
        break;
    default:
        $vidas = 7;
}

// Seleccionar la palabra para adivinar
$palabra = obtener_palabra();
$palabra_oculta = str_repeat("_", strlen($palabra));

// Si el formulario ha sido enviado, manejar la letra introducida
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['letra'])) {
    $letra = strtolower($_POST['letra']);
    $posiciones = array();
    
    // Verificar si la letra está en la palabra
    for ($i = 0; $i < strlen($palabra); $i++) {
        if ($palabra[$i] == $letra) {
            $posiciones[] = $i;
        }
    }
    
    if (empty($posiciones)) {
        $vidas--;
    } else {
        // Revelar las posiciones de la letra en la palabra
        foreach ($posiciones as $pos) {
            $palabra_oculta[$pos] = $letra;
        }
    }
}

// Mostrar mensaje de derrota o victoria
if ($vidas <= 0) {
    echo "<p>¡Has perdido! La palabra era '$palabra'.</p>";
} elseif ($palabra_oculta == $palabra) {
    echo "<p>¡Felicidades! Has adivinado la palabra '$palabra'.</p>";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego del Ahorcado</title>
</head>
<body>
    <h1>Juego del Ahorcado</h1>

    <?php if ($mensaje_bienvenida): ?>
        <p><?= $mensaje_bienvenida ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?= htmlspecialchars($nombre) ?>" required>

        <label for="nivel">Nivel de dificultad:</label>
        <select name="nivel" id="nivel">
            <option value="facil" <?= $nivel == 'facil' ? 'selected' : '' ?>>Fácil</option>
            <option value="intermedio" <?= $nivel == 'intermedio' ? 'selected' : '' ?>>Intermedio</option>
            <option value="dificil" <?= $nivel == 'dificil' ? 'selected' : '' ?>>Difícil</option>
        </select>

        <button type="submit">Iniciar Juego</button>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        <p>Palabra: <?= $palabra_oculta ?></p>
        <p>Vidas restantes: <?= $vidas ?></p>

        <form method="POST" action="">
            <label for="letra">Introduce una letra:</label>
            <input type="text" name="letra" id="letra" maxlength="1" required>
            <button type="submit">Adivinar</button>
        </form>
    <?php endif; ?>

</body>
</html>
