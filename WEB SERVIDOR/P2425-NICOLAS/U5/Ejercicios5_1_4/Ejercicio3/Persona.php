<?php
abstract class Persona {
    protected $nombre;
    protected $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function cambiarEdad($nuevaEdad) {
        $this->edad = $nuevaEdad;
    }

    public function __toString() {
        return "Nombre: $this->nombre, Edad: $this->edad";
    }
}
