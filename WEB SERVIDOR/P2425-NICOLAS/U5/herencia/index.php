<?php

require_once 'ejemplo1.php';
require_once 'naranja.php';
require_once 'manzana.php';



$f1 = new Fruta("Fresa");
$f2 = new Fruta("Platano");
$f3 = new Naranja();
$f3->setOrigen("Valencia");


$f4 = new Manzana();
$f4->setCategoria("Reineta");


function imprimirFruta(Fruta $fr){
    echo "<br/> La informacion de la fruta es:<br/>".
    $fr->escribeNombre().
    $fr->escribeCaracteristicas();
}


imprimirFruta($f1);
imprimirFruta($f2);
imprimirFruta($f3);
imprimirFruta($f4);
?>