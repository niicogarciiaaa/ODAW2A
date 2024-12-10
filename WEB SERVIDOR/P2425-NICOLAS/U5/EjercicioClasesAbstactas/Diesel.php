<?php

include_once 'Coche.php';

class Diesel extends Coche{


    
    public function __construct($marca,$color,$numRuedas,$combustible){
        parent::__construct($marca,$color,$numRuedas,$combustible);
    }
    public function arrancar(){
        echo "Coche diesel arrancado";
    }
}
?>