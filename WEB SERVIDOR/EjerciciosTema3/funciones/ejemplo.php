<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */






function doblar($v){
    for($i=0;$i<count($v);$i++){
        $v[$i]=$v[$i]*2;
    }
   
}

function doblar2(&$v){
    for($i=0;$i<count($v);$i++){
        $v[$i]=$v[$i]*2;
    }
   
}

?>