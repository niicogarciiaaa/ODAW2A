<?php
class Profesor extends Persona {
    private $asignatura;

    public function __construct($nombre, $edad, $asignatura) {
        parent::__construct($nombre, $edad);
        $this->asignatura = $asignatura;
    }

    public function toString() {
        return parent::__toString() . ", Asignatura: $this->asignatura";
    }
}
?>