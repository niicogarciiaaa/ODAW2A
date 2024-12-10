<?php
require_once 'Curso.php';
include_once 'Busqueda.php';

session_start();

// Recuperar cursos guardados en la sesión
$arrayCursos = $_SESSION['cursos'] ?? [];
$arrayCursos = array_merge($arrayCursos, Curso::leerCursos()); // Mezclar cursos de sesión con los de datos.php

if (isset($_SESSION['busquedas'])) {  
    Busqueda::setBusquedas($_SESSION['busquedas']);
}

$cursos_filtrados = [];
if (!isset($_REQUEST['filtrar'])) {
    $cursos_filtrados = $arrayCursos;
} else {
    $nombre = $_REQUEST['nombre']; 
    $horas_min = $_REQUEST['horas_min'];
    $fecha_inicio = $_REQUEST['fecha_inicio'];

    foreach ($arrayCursos as $curso) { 
        if (Curso::filtrarCursos($curso, $nombre, $horas_min, $fecha_inicio)) {
            $cursos_filtrados[] = $curso; 
        }
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Cursos</title>
</head>
<body>
    <h1>Listado de Cursos</h1>
    
    <!-- Enlace para dar de alta un nuevo curso -->
    <a href="altaCurso.php">Alta Curso</a>
    <hr>

    <!-- Resultados de la búsqueda -->
    <h2>Resultados:</h2>
    <ul>
        <?php if (empty($cursos_filtrados)): ?>
            <li>No se encontraron cursos que coincidan con los filtros.</li>
        <?php else: ?>
            <?php foreach ($cursos_filtrados as $curso): ?>
                <li>
                    <?= htmlspecialchars($curso->getNombre()) ?> - 
                    <?= htmlspecialchars($curso->getHoras()) ?> horas - 
                    <?= htmlspecialchars($curso->getFechaInicio()) ?>
                </li>
            <?php endforeach ; ?>
            
        <?php endif; ?>
    </ul>
</body>
</html>
