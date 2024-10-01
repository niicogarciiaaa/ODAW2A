<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$a1=array(1,30,45,5,63,10);
echo "<br/> Tamaño del array".count($a1);

echo "Buscar un elemento".in_array(20,$a1);
echo "<pre>";
echo "ordenar de forma ascendente con asociacion de indicies";
asort($a1);
print_r($a1);

rsort($a1);
print_r($a1);

$a2= array_values($a1);
print_r($a2);



$a3= array("Nome"=>"Nicolás","Apellido"=>"García");
$a4= array_values($a3);
print_r($a4);
$a5= array_keys($a3);
print_r($a5);
        
for($i=0;$i<count($a4);$i++){
    echo"<br/>",$a5[$i]."-".$a4[$i];
}

echo "<pre/>";
?> 