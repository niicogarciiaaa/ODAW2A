<?php
class Procesador {
    private $velocidad;
    private $marca;
    private $modelo;

    function __construct($velocidad = 0, $marca = "", $modelo = "") {
        $this->velocidad = $velocidad;
        $this->marca = $marca;
        $this->modelo = $modelo;
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

    public function __toString(): string {
        return "Objeto de la clase " . __CLASS__;
    }

    public function consultar() {
        return "Velocidad: " . $this->velocidad . " GHz | Marca: " . $this->marca . " | Modelo: " . $this->modelo;
    }
}


?>