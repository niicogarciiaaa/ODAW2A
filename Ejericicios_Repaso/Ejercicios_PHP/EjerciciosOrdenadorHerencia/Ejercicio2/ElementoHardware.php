<?php

class ElementoHardware{
    private $marca;
    private $modelo;
    
function __construct($marca="",$modelo=""){
    $this->marca=$marca;
    $this->modelo=$modelo;


}
public function __set($atributo, $valor) {
    if (property_exists(__CLASS__, $atributo)) {
    $this->$atributo = $valor;
    } else {
    echo "Non existe o atributo $atributo.";
    }
    }



    public function __get($atributo) {
    if (property_exists(__CLASS__, $atributo)) {
    return $this->$atributo;
    }
    return NULL;
    }
}
?>