<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


$a1 = array();
$a1[0]= array(1,2,3,4,5,6);
$a1[1]= array(7,8,9,10,11);
print_r($a1);

$a1 = array();
$a1[0]= array(1,2,3,4,5,6);
$a1[1]= array(7,8,9,10,11);

print_r($a1);
echo "<br/>".$a1[0][1];


echo "<pre>";
$a1=array("Nicolas"=>array(1,2,3,4,5,6),"García"=>array(7,8,9,10,11));
print_r($a1);
echo "</pre>";

$a1 = array();
$a1[0]= array(1,2,3,4,5,6);
$a1[1]= array(7,8,9);
$a1[2]= array(10,11,12);

for($f=0;$f<count($a1);$f++){
    for($c=0;$c<count($a1[$f]);$c++){
        echo ' '.$a1[$f][$c];
    }
   echo"<br/>";
    
    }

?>