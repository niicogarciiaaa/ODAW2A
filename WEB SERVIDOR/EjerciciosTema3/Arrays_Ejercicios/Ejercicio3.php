<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
$num=100;
if($num<=100){
    for ( $i = 1; $i <= $num; $i++) {
          
            
         
            for ($j= 1;$j <= $i; $j++) {
                echo"*";
            }
            echo"</br>";
        }
}else{
    echo"Numero demasiado grande,no esta entre 1 y 100";
}

?>