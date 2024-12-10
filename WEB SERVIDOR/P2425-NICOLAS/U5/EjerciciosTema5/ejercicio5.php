<?php 
class cuenta_objs {
 static private $contador = 0;
 static function cuantosObjetos() {
 return cuenta_objs::$contador;
 }
 function __construct() {
 cuenta_objs::$contador++;
 }
}
$o1 = new cuenta_objs();
$o2 = new cuenta_objs();
$o3 = new cuenta_objs();
//Visualiza el número de objetos existentes
unset($o2);
//Visualiza el número de objetos existentes


?>