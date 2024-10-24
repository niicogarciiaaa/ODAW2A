<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


$array= array();

for($i=0;$i<10;$i++){
    for($j=0;$j<10;$j++){
        if ($j==$i){
            echo" ".$array[$i][$j] = 1;
        }else{
            echo " ".$array[$i][$j] = 0;
        }
    }
    echo"<br/>";
}


?>