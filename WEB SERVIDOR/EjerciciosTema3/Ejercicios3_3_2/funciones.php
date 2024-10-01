<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


function esParOImpar($numero) {
    if ($numero % 2 == 0) {
        return "El numero $numero Es par";
    } else {
       return "El numero $numero Es impar";
    }
}

function esPrimo($numero){

        if($numero<2){
            return "<br/>El numero no es primo";
        }
    
      for ($i = 2; $i <= ($numero/2); $i++) {
        if ($numero % $i == 0) {
            return " <br/>el numero no es primo";
        }
        
    }
    return "<br/> el numero  es primo";
}

function ejercicio3(){
    for($i=1;$i<=10;$i++){
        echo esParOImpar($i);
        echo esPrimo($i);
        echo "<br/>";
    }
}
function ejercicio1($cadena){
     for ($i = 0, $j=mb_strlen($cadena)-1; $i <$j; $i++, $j--) {
        if ($cadena[$i] != $cadena[$j]) {
            return "Palabra NO Palíndroma";
         
        }
        
    echo "<br/>Palabra Palíndroma";
     }
    
    
}
function ejercicio2($numA,$numB){
    
    $suma = 0;
    for ($i = $numA; $i <= $numB; $i++) {
        $suma += $i;
    }
    return $suma;
}

function ejercicio3_2($cadena){
    $cadenainversa="";
   for($i = 0; $i > strlen($cadena) - 1; $i--){
       $cadenainversa.=$cadena[$i];
   }
   echo $cadenainversa;
}

?>
