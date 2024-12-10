<?php

class Curso{
    private $id;
    private $nombre;
    private $horas;
    private $fecha_inicio;
    public function __construct($id,$nombre,$horas,$fecha_inicio){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->horas=$horas;
        $this->fecha_incicio=$fecha_inicio;

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

public static function leerCursos() {
    // Incluir el archivo con los datos
    include('datos.php');
    
    // Crear un array para almacenar los objetos de tipo Curso
    $cursosObjetos = [];

    // Recorrer el array de cursos y crear un objeto Curso para cada uno
    foreach ($cursos as $curso) {
        $cursosObjetos[] = new self($curso['id'], $curso['nombre'], $curso['horas'], $curso['fecha_inicio']);
    }

    // Devolver el array de objetos
    return $cursosObjetos;
}

public static function filtrarCursos($cursos, $nombre, $horas_min, $fecha_inicio) {
    $cursosFiltrados = [];

    // Recorrer el array de objetos de tipo Curso
    foreach ($cursos as $curso) {
        // Comprobar si el curso cumple con los filtros
        if (
            ($nombre == "" || stripos($curso->nombre, $nombre) !== false) &&
            ($horas_min == "" || $curso->horas >= $horas_min) &&
            ($fecha_inicio == "" || strtotime($curso->fecha_inicio) >= strtotime($fecha_inicio))
        ) {
            $cursosFiltrados[] = $curso;  // Si cumple, añadirlo al array de cursos filtrados
        }
    }

    return $cursosFiltrados;
}
}

?>