<?php

class Fruta{

    private $nombre;

    public function __construct($nombre){
            $this-> nombre=$nombre;
    }

    public function escribeCaracteristicas(){
            echo "No hay características";
    }
    public function escribeNombre(){
        echo "Fruta: " . $this->nombre . "<br/>";  // Add a line break
    }
    
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
}
?>