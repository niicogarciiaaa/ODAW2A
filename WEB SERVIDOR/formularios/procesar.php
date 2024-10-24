<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
echo '<br/>';
print_r($_REQUEST);

echo '<br/>';
print_r($_POST);


echo '<br/>';
print_r($_GET);

echo "<br/> su nombre es: ".$_REQUEST["nombre"];
echo "<br/> su apellido es: ".$_POST["apellido"];

$sexo="";
if (isset($_POST["rsexo"])){
    $sexo=$_POST["rsexo"];
}else{
    $sexo="no se especifica";
}
echo "<br/> su sexo es: ".$_POST["rsexo"];

