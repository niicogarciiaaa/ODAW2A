<?php
class DiscoDuro{

private $cantidadGB;
private $numeroRevoluciones;
private $tipoDisco;
private $marca;


function __construct($cantidadGB="",$numeroRevoluciones="",$tipoDisco="",$marca=""){
    $this-> cantidadGB=$cantidadGB;
    $this-> numeroRevoluciones=$numeroRevoluciones;
    $this-> tipoDisco=$tipoDisco;
    $this-> marca=$marca;

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



    public function consultar() {
        return "Cantidad de almacenamiento: " . $this->cantidadGB . " GB | Velocidad: " . $this->numeroRevoluciones . " MHz | tipoDisco: " . $this->tipoDisco . " | Marca: " . $this->marca;
    }

}



?>