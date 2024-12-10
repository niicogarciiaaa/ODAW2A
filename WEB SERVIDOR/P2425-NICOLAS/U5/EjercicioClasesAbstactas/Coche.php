<?php

abstract class coche{
    private $marca;
    private $color;
    private $numRuedas;
    private $combustible;


    public function __construct($marca,$color,$numRuedas,$combustible){
        $this->marca = $marca;
        $this->color = $color;
        $this->numRuedas = $numRuedas;
        $this->combustible = $combustible;
    }

    public function __set($atributo, $valor) {
      
        if (property_exists(__CLASS__, $atributo)) {
        $this->$atributo = $valor;
    } else {
        echo "No existe el atributo $atributo.";
    
}
}

public function __get($atributo) {
    if (property_exists(__CLASS__, $atributo)) {
        return $this->$atributo;
    }
    return NULL;
}
    abstract function arrancar();
}

?>