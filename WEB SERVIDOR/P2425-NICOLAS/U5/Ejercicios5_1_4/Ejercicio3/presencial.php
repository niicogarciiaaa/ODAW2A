<?php
class Presencial extends Alumno {
    private $matriculaCurso;
    private $noConvocatoria;
    private $plusPorConvocatoria;

    public function __construct($nombre, $edad, $curso, $nivelAcademico, $matriculaCurso, $noConvocatoria, $plusPorConvocatoria) {
        parent::__construct($nombre, $edad, $curso, $nivelAcademico);
        $this->matriculaCurso = $matriculaCurso;
        $this->noConvocatoria = $noConvocatoria;
        $this->plusPorConvocatoria = $plusPorConvocatoria;
    }

    public function mostrarAsignaturas() {
        return "Matriculado en todas las asignaturas del curso.";
    }

    public function pagoMensual() {
        return ($this->matriculaCurso + $this->plusPorConvocatoria * $this->noConvocatoria) / 12;
    }

    public function __toString() {
        return parent::__toString() . ", Matricula: $this->matriculaCurso, Convocatorias: $this->noConvocatoria";
    }
}

?>