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


$ordenador1= new Ordenador("2",null,null,null);
echo $ordenador1->consultar();
echo '<hr/>';
$ordenador1->discoDuro= $disco1;
$ordenador1->procesador= $procesador1;
$ordenador1->memoria= $memoria1;
echo $ordenador1->consultar();
?>