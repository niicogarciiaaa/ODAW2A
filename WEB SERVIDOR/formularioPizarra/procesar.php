<?php
include 'funciones.php';
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
$palabra=$_POST["palabra"];


if(esPalindromo($palabra)==true){
    echo "la palabra es palindroma";
}else{
    echo"la palabra NO es palindroma";
}