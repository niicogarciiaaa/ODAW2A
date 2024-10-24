<?php

include 'funciones.php';

$letra = $_POST["letra"];

echo "<table border='1' border-collapse='collapse'>";
for ($i = 0; $i < 10; $i++) {
    echo '<tr>';

    echo '<td>';
    echo generarIP($letra);
}
echo '</td>';
echo'</tr>';

echo"</table>";
