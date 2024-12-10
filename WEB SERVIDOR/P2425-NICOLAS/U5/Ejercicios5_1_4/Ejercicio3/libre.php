<?php
class Libre extends Alumno {
    private $listaAsignaturas = [];
    private static $precioPorHora = 10;
    private $noHorasDiarias;

    public function __construct($nombre, $edad, $curso, $nivelAcademico, $noHorasDiarias) {
        parent::__construct($nombre, $edad, $curso, $nivelAcademico);
        $this->noHorasDiarias = min($noHorasDiarias, 5); // Máximo 5 horas diarias
    }


    public function pagoMensual() {
        return "Precio mensual:".self::$precioPorHora * $this->noHorasDiarias * 30;
    }

    public function __toString() {
        return parent::__toString() . ", Asignaturas: " . implode(", ", $this->listaAsignaturas);
    }
    public function mostrarAsignaturas(){
        
    }

}
