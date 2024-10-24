<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$v= array();
for($i=0;$i<20;$i++){
    $v[$i]=mt_rand(0,500);
            
}
echo "<pre>";
print_r($v);
echo '</pre>';

?>