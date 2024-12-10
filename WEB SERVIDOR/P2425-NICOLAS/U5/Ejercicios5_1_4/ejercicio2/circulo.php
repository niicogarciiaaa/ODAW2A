<?php
include_once 'interfaz.php';

class Circulo implements Figura{

    private $radio;

    public function __construct($radio){
            $this->radio=$radio;
    }
    public function area(){
        return pi()*pow($this->radio,2);
    }

    public function perimetro(){
        return 2 * pi() * $this->radio;
    }
    public function MostrarArea(){
        echo "El area del Círculo es ".$this->area();
    }
    public function MostrarPerimetro(){
        echo "El perímetro del Círculo es ".$this->perimetro();

    }
}

?>