<?php


include_once 'Coche.php';


class Gasolina extends Coche{


    public function __construct($marca,$color,$numRuedas,$combustible){
        parent::__construct($marca,$color,$numRuedas,$combustible);
    }
    public function arrancar(){
        echo "Coche gasolina arrancado";
    }
}
?>