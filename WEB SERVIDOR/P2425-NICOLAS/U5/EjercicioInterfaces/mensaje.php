<?php

include_once 'interfaces.php';
class Mensaje implements Saludo,Despedida{

    private $dia;

    public function __construct($dia){
        $this->dia = $dia;
    }

    function Saludar(){
        echo "Buen".$this->dia;
    }
    function Despedirse(){
        echo "Hasta Luego";
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

}
?>