<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
$filas = 20;
$columnas = 20;

$minas_colocadas = 0;
$tablero = array();

for ($i = 0; $i < $filas; $i++) {
    
    for ($j = 0; $j < $columnas; $j++) {
        $tablero[$i][$j] = ' ';
    }
}

while ($minas_colocadas < 10) {
    $fila = mt_rand(0, $filas - 1);
    $columna = mt_rand(0, $columnas - 1);
    if ($tablero[$fila][$columna] != "*") { // Si no hay mina ya en esa posición
        $tablero[$fila][$columna] = "*";
        $minas_colocadas++;
    }
}
echo "<pre>";
// Mostrar el tablero
echo "<table border='1' align='center' style='border-collapse: collapse;'>";

for ($i = 0; $i < $filas; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $columnas; $j++) {
       
        echo "<td width=30px height=30px style='text-align: center; vertical-align: middle;'>";
        echo $tablero[$i][$j] . " ";
        echo "</td>";
    }
    echo"</tr>";
    echo "<br/>";

}
echo "</table>";
echo "</pre>";
?>