<?php
class Procesador extends ElementoHardware {
    private $velocidad;
   

    function __construct($velocidad = 0, $marca = "", $modelo = "") {
        $this->velocidad = $velocidad;
        parent::__construct($marca,$modelo);

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

    public function __toString(): string {
        return "Objeto de la clase " . __CLASS__;
    }

    public function consultar() {
        return "Velocidad: " . $this->velocidad . " GHz | Marca: " . $this->marca . " | Modelo: " . $this->modelo;
    }
}


?>