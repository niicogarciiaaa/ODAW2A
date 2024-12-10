<?php

// Incluir los archivos necesarios
include_once 'DiscoDuro.php';
include_once 'procesador.php';
include_once 'memoria.php';
include_once 'ordenador.php';

// Instancias de las clases de componentes
$disco1 = new DiscoDuro(200, 7200, "HDD", "Toshiba", "Canvio Basic");
$procesador1 = new Procesador("4.3", "Intel", "I7-10700");
$memoria1 = new Memoria(32000, "RAM", "3200", "Kingston", "Fury");

// Instanciar el objeto Ordenador
$ordenador1 = new Ordenador("12345", "Dell", "XPS 15",$memoria1,$procesador1,$disco1);

// Asignar los componentes al ordenador


// Mostrar la información del ordenador
echo $ordenador1->consultar();

?>
