<?php

include 'funciones.php';

$min = $_POST['min'];
$max = $_POST['max'];
$opcion = $_POST['opciones'];
 switch ($opcion) {
        case 'numeros':
           echo generarPassNum($min, $max);
            break;
        case 'letras':
            echo generarPassAlfa($min, $max);
            break;
        case 'numerosletras':
            echo generarPassNumAlfa($min, $max);
            break;
        
    }

    // Muestra de la contraseña generada
   


?>

