<?php

include_once 'circulo.php';
include_once 'cuadrado.php';

$c1 =new Circulo(3);
$c2 =new Circulo(4);
$c3 =new Circulo(3);

$c4 =new Cuadrado(2);
$c5 =new Cuadrado(4);
$c6 =new Cuadrado(6);


$formas =array($c1,$c2,$c3,$c4,$c5,$c6);

for ($i=0; $i <count($formas) ; $i++) { 
    echo "<br/>";
    $formas[$i]->area();
    $formas[$i]->perimetro();
    echo get_class($formas[$i]).$i;
    echo "<br>";
    $formas[$i]->MostrarArea();
    echo "<br>";
    $formas[$i]->MostrarPerimetro();

    print_r($_SESSION);
    $_SESSION["circulo1"]= $c1;

    print_r($_SESSION);
}
?>