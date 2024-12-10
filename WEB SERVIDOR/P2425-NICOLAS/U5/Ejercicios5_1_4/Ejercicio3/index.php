<?php
function autocargarClases($nombreClase) {
    

    $filename = __DIR__ . "/$nombreClase.php";
    if(file_exists($filename)){
    require_once($filename);
    //include_once(__DIR__ . "/" . $nombreClase . ".php");
    }
 }
 spl_autoload_register("autocargarClases");
//Comprobamos el funcionamiento de las clases creando los siguientes
 $aluLibre1 = new Libre ("Eva", 34, 1, "Básico", 2);
 $aluLibre2 = new Libre ("Pedro", 34, 2, "Intermedio", 3);
$asignaturas1 = ["Programacion", "Lenguajes de Marcas"];

$aluLibre1->pedirAsignaturas($asignaturas1);
echo "<h1>Alumnos libres</h1>";
echo $aluLibre1->pagoMensual(); echo "<br/>";
 echo $aluLibre1; echo "<br/>";
 echo $aluLibre2; echo "<br/>";


 $aluPresencial1 = new Presencial ("Julio", 20, 2, "Intermedio", 950.70, 10.25, 2);
 $aluPresencial2 = new Presencial ("Rosa", 21, 2, "Intermedio", 950.70, 10.25, 1);
 echo "<h1>Alumnos Presencial</h1>";
 echo $aluPresencial1; echo "<br/>";
 echo $aluPresencial2; echo "<br/>";

 echo "<h1>Profesores</h1>";
$prof1 = new Profesor("Juan", 40, "Programación");
 echo $prof1; echo "<br/>";
?>