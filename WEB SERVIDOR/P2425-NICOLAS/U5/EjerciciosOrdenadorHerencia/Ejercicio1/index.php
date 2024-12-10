<?php


//includes



include_once 'DiscoDuro.php';
include_once 'procesador.php';
include_once 'memoria.php';
include_once 'ordenador.php';

// Instancias de las clases de componentes
$disco1 = new DiscoDuro(200, 7200, "HDD", "Toshiba");
$procesador1 = new Procesador("4.3", "Intel", "I7-10700");
$memoria1 = new Memoria(32000, "RAM", "3200", "Kingston");


$ordenador1= new Ordenador("1","HP","g4",$memoria1,$procesador1,$disco1);

echo $ordenador1->consultar();
?>