<?php
function autocargarClases($nombreClase) {
    echo "<br/>Cargando la clase: " . __DIR__ . "/clases1/$nombreClase.php";

    $filename = __DIR__ . "/clases1/$nombreClase.php";
    if(file_exists($filename)){
    require_once($filename);
    //include_once(__DIR__ . "/" . $nombreClase . ".php");
    }
 }
function autocargarClases2($nombreClase) {
    echo "<br/>Cargando la clase: " . __DIR__ . "/clases2/$nombreClase.php";

    $filename = __DIR__ . "/clases2/$nombreClase.php";
    if(file_exists($filename)){
    require_once($filename);
    //include_once(__DIR__ . "/" . $nombreClase . ".php");
    }
 }
 

 spl_autoload_register("autocargarClases");
 spl_autoload_register("autocargarClases2");



$a = new A();
$b = new B();
$c = new C();
?>