<?php
include_once 'ElementoHardware.php';

class DiscoDuro extends ElementoHardware {

    private $cantidadGB;
    private $numeroRevoluciones;
    private $tipoDisco;

    function __construct($cantidadGB = "", $numeroRevoluciones = "", $tipoDisco = "", $marca="", $modelo="") {
        $this->cantidadGB = $cantidadGB;
        $this->numeroRevoluciones = $numeroRevoluciones;
        $this->tipoDisco = $tipoDisco;
        parent::__construct($marca, $modelo);
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
        } else {
            return parent::__get($atributo);  // Si no existe en esta clase, lo delegamos a la clase base
        }
        return NULL;
    }

    public function consultar() {
        return "Cantidad de almacenamiento: " . $this->cantidadGB . " GB | Velocidad: "
         . $this->numeroRevoluciones . " RPM 
         | Tipo de disco: " . $this->tipoDisco . " 
         | Marca: " . $this->marca . " 
         | Modelo: " . $this->modelo;
    }
}
?>
