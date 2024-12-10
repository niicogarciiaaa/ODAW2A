<?php
session_start();
require_once 'Curso.php';

// Inicializamos la lista de cursos en sesión si no existe
if (!isset($_SESSION['cursos'])) {
    $_SESSION['cursos'] = Curso::leerCursos();
}

// Variables para mostrar mensajes de error y éxito
$errores = [];
$exito = "";

// Verificamos si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger y limpiar los datos del formulario
    $nombre = trim(strip_tags($_POST['nombre'] ?? ''));
    $fechaInicio = trim(strip_tags($_POST['fecha_inicio'] ?? ''));
    $horas = trim(strip_tags($_POST['horas'] ?? ''));

    // Validación del nombre del curso
    if (strlen($nombre) < 4 || strlen($nombre) > 100) {
        $errores[] = "El nombre del curso debe tener entre 4 y 100 caracteres.";
    }

    // Validación de la fecha de inicio (debe ser posterior a hoy)
    if (!strtotime($fechaInicio) || strtotime($fechaInicio) <= strtotime(date('Y-m-d'))) {
        $errores[] = "La fecha de inicio debe ser válida y posterior a hoy.";
    }

    // Validación del número de horas (entero positivo entre 5 y 200)
    if (!filter_var($horas, FILTER_VALIDATE_INT, ["options" => ["min_range" => 5, "max_range" => 200]])) {
        $errores[] = "El número de horas debe ser un entero positivo entre 5 y 200.";
    }

    // Si no hay errores, se añade el curso a la lista
    if (empty($errores)) {
        $id = count($_SESSION['cursos']) + 1; // Generar ID incremental
        $nuevoCurso = new Curso($id, $nombre, $horas, $fechaInicio);
        $_SESSION['cursos'][] = $nuevoCurso;
        $exito = "El curso ha sido añadido correctamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta Curso</title>
</head>
<body>
    <h1>Alta de un nuevo Curso</h1>

    <!-- Mostrar mensajes de error -->
    <?php if (!empty($errores)): ?>
        <ul style="color: red;">
            <?php foreach ($errores as $error): ?>
                <li><?= htmlspecialchars($error) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <!-- Mostrar mensaje de éxito -->
    <?php if (!empty($exito)): ?>
        <p style="color: green;"><?= htmlspecialchars($exito) ?></p>
    <?php endif; ?>

    <!-- Formulario para dar de alta un nuevo curso -->
    <form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="nombre">Nombre del curso:</label>
        <input type="text" id="nombre" name="nombre" value="<?= htmlspecialchars($_POST['nombre'] ?? '') ?>">
        <br>
        <label for="fecha_inicio">Fecha de inicio:</label>
        <input type="date" id="fecha_inicio" name="fecha_inicio" value="<?= htmlspecialchars($_POST['fecha_inicio'] ?? '') ?>">
        <br>
        <label for="horas">Número de horas:</label>
        <input type="number" id="horas" name="horas" value="<?= htmlspecialchars($_POST['horas'] ?? '') ?>">
        <br>
        <input type="submit" value="Dar de alta">
    </form>

    <hr>
    <a href="index.php">Volver al listado de cursos</a>
</body>
</html>
