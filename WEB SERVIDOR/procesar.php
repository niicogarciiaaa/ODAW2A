<?php
$nombre = $_REQUEST["nombre"];
$correo = $_REQUEST["correo"];
$edad = $_REQUEST["edad"];
$selected_arr = $_REQUEST['colores'];
$comentarios = $_REQUEST['comentarios'] ?? '';
print_r($_REQUEST);
echo "<hr>";
echo "EL nombre es: ".$nombre." con correo electrónico ".$correo ." con edad: ".$edad." sus colores favoritos son: ".sabercolores($selected_arr)." y sus comentarios son: ".$comentarios;



 function sabercolores($array){

$color="";
$coloreselecionados="";
//for ($i=0; $i<$n; $i++)
   //print ("$idiomas[$i]<br>\n");
   foreach ($array as $color) {
     $coloreselecionados.= ("$color<br>\n");
   }
   return $coloreselecionados;
  }
?>