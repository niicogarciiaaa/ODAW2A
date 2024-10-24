<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$cadena="AstA es una prueba";
$caracter="a";
$contador=0;


for($i=0;$i<strlen($cadena);$i++){
    if ($cadena[$i] == $caracter || $cadena[$i] == strtoupper($caracter)) {
            $contador++;
        }
        
    
}
   echo "El carácter 'a' aparece $contador veces.";
