<?php

function autocargarClases($nombreClase) {
    $directorios = array("clases1","clases2");
    for($i=0;$i<count($directorios);$i++){
    echo "<br/>Cargando la clase: " . __DIR__ . "/".$directorios[$i]."/$nombreClase.php";

    $filename =  __DIR__ . "/".$directorios[$i]."/$nombreClase.php";
    if(file_exists($filename)){
    require_once($filename);
    //include_once(__DIR__ . "/" . $nombreClase . ".php");
    }
}
 }

 spl_autoload_register("autocargarClases");
//  spl_autoload_register("autocargarClases2");



$a = new A();
$b = new B();
$c = new C();
?>