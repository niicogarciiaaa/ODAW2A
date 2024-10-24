<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 
echo "<pre>";
//declaración del array
$a1=array();
//inicialización del array
$a1[0]=9.9;
$a1[1]=5.5;
$a1[2]=5.7;
print_r($a1);

$a2=array();
//inicialización del array
$a2[]=7.9;
$a2[]=7.5;
$a2[]=7.7;
print_r($a2);
$a3=array(5,6,7);
//inicialización del array
print_r($a3);
echo "</pre>";
*/
//recuperacion de los elementos del array
//declaración del array
echo "<pre>";
$a1=array();
//inicialización del array
$a1[0]=9.9;
$a1[1]=5.5;
$a1[2]=5.7;
echo"</br>".$a1[0];//existe

//echo"</br>".$a1[];
for($i=0;$i<count($a1);$i++){
    echo " ".$a1[$i];
    
}
$a4= array("Hola", 4);
echo"</br>".$a4[0]." El tipo de datos es ".gettype($a4[0]);
echo"<br/>";
echo"</br>".$a4[1]." El tipo de datos es ".gettype($a4[1]);


//asignar un valor a posiciones q no existen
$a1[10]=6.9;
$a1[]=11;
$a1[3]=12;
$a1[]=13;
print_r($a1);
echo "tamaño: ". count($a1);
echo"<br/>";
echo "tamaño: ". sizeof($a1);

//foreach
echo "<br/>";
foreach ($a1 as $j){
    echo " $j";
}
echo"<br/>";
//recuperar os indices con ARRAY_KEYS

$claves= array_keys($a1);
print_r($claves);

for($i=0;$i<count($claves);$i++){
    echo " Posición $i=".$a1[$claves[$i]];
    echo "<br/>";
}


//eliminar un elemento del array

unset($a1[10]);
unset($a1[2]);

$a5 = array(1,2,5,"10"=>15,"4"=>20,"2"=>30);
echo "Array 5:"."<br/>";
print_r($a5);
echo "</pre>";
?>