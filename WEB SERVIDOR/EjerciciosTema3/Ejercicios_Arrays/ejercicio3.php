<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
$boleto=array();

while (count($boleto) < 6) {
            $aleatorio = rand(1, 49);
            if (!in_array($aleatorio, $boleto)) {
            $boleto[] = $aleatorio;
            }
        }
$boleto[6]=mt_rand(0,9);

echo"<pre>";
$aux1= array_values($boleto);
echo"Numeros: ";
for($i=0;$i<=5;$i++){
    echo$aux1[$i]." ";
}
echo"<br/>";
echo "Complementario: ".$aux1[6];

echo "</pre>";
?>