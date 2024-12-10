<?php

final class alumno extends persoa{

    private $numClases;

    function __construct(){
        parent::__construct();
    }

    function setNumClases($numClases){
        $this->numClases= $numClases;
    }

    function aPagar(){
        switch(true){
            case ($numClases ==1):
                return "20 euros";
                
            case($numClases==2):
                return "32 euros";
                
            case($numClases>=3):
                return "40 euros";
                
            default:
                return "Debe de indicar previamente el numero de clases";
                
        }
    }
}
?>