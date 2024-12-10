<?php
include_once 'ElementoHardware.php';
class Memoria extends ElementoHardware {
    private $cantidadMB;
    private $tipoMemoria;
    private $velocidadMemoria;

    function __construct($cantidadMB = 0, $tipoMemoria = "", $velocidadMemoria = "", $marca,$modelo) {
        $this->cantidadMB = $cantidadMB;
        $this->tipoMemoria = $tipoMemoria;
        $this->velocidadMemoria = $velocidadMemoria;
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
        return "Cantidad de memoria: " . $this->cantidadMB . " MB | Velocidad: " . $this->velocidadMemoria. " | Tipo Memoria: " . $this->tipoMemoria."|Marca:". $this->marca."| Modelo:".$this->modelo;
    }
}
?>