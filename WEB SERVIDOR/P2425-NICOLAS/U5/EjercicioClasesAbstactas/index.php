<?php

include_once 'Diesel.php';
include_once 'Gasolina.php';
$d1 = new Diesel("Seat","Gris","4","diesel");
$d2 = new Diesel("Volkswagen","Blanco","4","diesel");
$g1 = new Gasolina("Citröen","Negro","4","gasolina");
$g2 = new Gasolina("Volkswagen","Rojo","4","Gasolina");


$coches= array($d1,$d2,$g1,$g2);
for ($i=0; $i <count($coches) ; $i++) { 
    $coches[$i]->arrancar();
    echo "<br/>";
}
?>