<?php


//includes



function autocargarClases($nombreClase) {
    echo "<br/>Cargando la clase: " . __DIR__ . "/$nombreClase.php";

    $filename = __DIR__ . "/$nombreClase.php";
    if(file_exists($filename)){
    require_once($filename);
    //include_once(__DIR__ . "/" . $nombreClase . ".php");
    }
 }

 spl_autoload_register("autocargarClases");

// Instancias de las clases de componentes
$disco1 = new DiscoDuro(200, 7200, "HDD", "Toshiba");
$procesador1 = new Procesador("4.3", "Intel", "I7-10700");
$memoria1 = new Memoria(32000, "RAM", "3200", "Kingston");


$ordenador1= new Ordenador("1","HP","g4",$memoria1,$procesador1,$disco1);
echo "<br/><hr>";
echo $ordenador1->consultar();
?>;