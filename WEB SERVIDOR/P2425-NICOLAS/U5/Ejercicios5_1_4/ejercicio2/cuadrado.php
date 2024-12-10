<?php
include_once 'interfaz.php';

class Cuadrado implements Figura{

    private $lado;

    public function __construct($lado){
            $this->lado=$lado;
    }
    public function area(){
        return pi()*pow($this->lado,2);
    }

    public function perimetro(){
        return 2 * pi() * $this->lado;
    }
    public function MostrarArea(){
        echo "El area del Cuadrado es ".$this->area();
    }
    public function MostrarPerimetro(){
        echo "El perímetro del Cuadrado es ".$this->perimetro();

    }
}

?>