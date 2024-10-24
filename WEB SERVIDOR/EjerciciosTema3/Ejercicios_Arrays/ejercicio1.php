<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


const tamanho=20;
echo "<pre>";
$v= array();
for($i=0;$i<=tamanho;$i++){
    $v[$i]=$i+1;
            
}

       
foreach ($v as $valor){
    echo $valor." ";
}
rsort($v);
echo "<br/>";
for($i=0;$i<=tamanho;$i++){
    echo $v[$i]." ";
}
    
echo "</pre>";
?>