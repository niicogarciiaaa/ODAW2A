<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


function generarPassNum($min, $max) {
    $longitud = mt_rand($min, $max);
    $contrasenha = '';
    
    for ($i = 0; $i < $longitud; $i++) {
        // Asegura que solo se generen números
        $contrasenha .= mt_rand(0, 9);
    }
    
    return $contrasenha;
}

function generarPassAlfa($min, $max) {
    $longitud = mt_rand($min, $max);
    $contrasenha = '';
    $letras = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    
    for ($i = 0; $i < $longitud; $i++) {
        // Selecciona una letra aleatoria
        $indice = mt_rand(0, strlen($letras) - 1);
        $contrasenha .= $letras[$indice];
    }
    
    return $contrasenha;
}

function generarPassNumAlfa($min, $max) {
    $longitud = mt_rand($min, $max);
    $contrasenha = '';
    $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    
    for ($i = 0; $i < $longitud; $i++) {
        // Selecciona un carácter aleatorio
        $indice = mt_rand(0, strlen($caracteres) - 1);
        $contrasenha .= $caracteres[$indice];
    }
    
    return $contrasenha;
}
// Llamada a la función y muestra del resultado
//echo generarPassNum(5, 8);


?>
