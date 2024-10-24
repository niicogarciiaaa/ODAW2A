<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


$usuario="NicolasGarciaMoreira";


if (ctype_alnum ($usuario )){
    echo 'Login correcto '.strtolower($usuario);
} else {
    echo 'Solo puede contener caracteres alfanumericos y No puede tener espacios en blanco';
}
?>