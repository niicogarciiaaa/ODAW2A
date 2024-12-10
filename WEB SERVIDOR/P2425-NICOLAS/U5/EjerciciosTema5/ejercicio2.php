<?php

class persona2{
    private $nombre;
    private $profesion;
    private $edad;
   

    function __construct($nombre,$edad,$profesion="Sin Especificar") {
        $this->nombre = $nombre;
        $this->profesion = $profesion;
        $this->edad = $edad;
        
        
    }

    public function __set($atributo, $valor) {
        if ($atributo != "nombre") {
            if (property_exists(__CLASS__, $atributo)) {
            $this->$atributo = $valor;
        } else {
            echo "No existe el atributo $atributo.";
        }
    }
}

    public function __get($atributo) {
        if (property_exists(__CLASS__, $atributo)) {
            return $this->$atributo;
        }
        return NULL;
    }

    public function __toString(): string {
        return "Nombre: " .$this->nombre." | Profesion:".$this->profesion." | edad: ".$this->edad;
    }
}

?>