<?php
$alto = 5;  // Altura de la pirámide

for ($i = 1; $i <= $alto; $i++) {
    // Imprimir espacios antes de los asteriscos
    for ($j = 1; $j <= ($alto - $i); $j++) {
        echo "&nbsp;&nbsp;";
    }
    // Imprimir asteriscos en cada fila
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    // Salto de línea después de cada fila
    echo "<br>";
}
?>