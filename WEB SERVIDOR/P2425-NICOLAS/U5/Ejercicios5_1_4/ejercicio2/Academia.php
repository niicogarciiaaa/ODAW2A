<?php


class Academia{
    private const NOMBRE="";
    private $arrayProfes;
    private $arrayAlumnos;
    function __construct($nombreAca){
        $this->NOMBRE = $nombreAca;
    }

    function anhadirAlumnos($alumno){
       $this->arrayAlumnos[]=$alumno;
    }
    function anhadirProfesores($profesor){
        $this->arrayProfesores[]=$profesor;

    }
}
?>