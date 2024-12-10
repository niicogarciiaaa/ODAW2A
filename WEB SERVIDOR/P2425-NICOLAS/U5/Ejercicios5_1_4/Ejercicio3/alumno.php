<?php

abstract class Alumno extends Persona {
    private $curso;
    private $nivelAcademico;

    public function __construct($nombre, $edad, $curso, $nivelAcademico) {
        parent::__construct($nombre, $edad);
        $this->curso = $curso;
        $this->nivelAcademico = $nivelAcademico;
    }

    public function cambiarCurso($curso) {
        $this->curso = $curso;
    }

    public function __toString() {
        return parent::__toString() . ", Curso: $this->curso, Nivel Académico: $this->nivelAcademico";
    }

    abstract public function pagoMensual();
    abstract public function mostrarAsignaturas();
}


?>