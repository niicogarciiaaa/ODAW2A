<?php
class Memoria {
    private $cantidadMB;
    private $tipoMemoria;
    private $velocidadMemoria;
    private $marca;

    function __construct($cantidadMB = 0, $tipoMemoria = "", $velocidadMemoria = "", $marca = "") {
        $this->cantidadMB = $cantidadMB;
        $this->tipoMemoria = $tipoMemoria;
        $this->velocidadMemoria = $velocidadMemoria;
        $this->marca = $marca;
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
        return "Cantidad de memoria: " . $this->cantidadMB . " MB | Velocidad: " . $this->velocidadMemoria . " RPM | Marca: " . $this->marca . " | Tipo Memoria: " . $this->tipoMemoria;
    }
}
?>