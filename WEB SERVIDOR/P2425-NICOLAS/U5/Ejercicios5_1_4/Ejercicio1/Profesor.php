<?php

include_once 'Baile.php';
final class profesor extends Persoa{
    function __construct(){
        parent::__construct();
    }
    

    function calcularSoldo($numeroHoras,$importe=16){

        return"Soldo total:".$numero*$importe;
    }
    function anhadirBaile($nombre, $edadMinima) {
        // Comprobar si el baile ya existe en la lista
        foreach ($this->bailes as $baile) {
            if ($baile->getNombre() === $nombre) {
                echo "El baile '$nombre' ya está dado de alta.\n";
                return;  // Si el baile ya está, no lo añadimos
            }
        }

        // Si no está dado de alta, añadir el nuevo baile
        $baile = new Baile($nombre, $edadMinima);
        $this->bailes[] = $baile;
        echo "Baile '$nombre' añadido con edad mínima de $edadMinima años.\n";
    }


    function eliminarBaile($nombre) {
        foreach ($this->bailes as $key => $baile) {
            if ($baile->getNombre() === $nombre) {
                unset($this->bailes[$key]);
                return;
            }
        }
    }
    function mostrarBailes() {
        if (empty($this->bailes)) {
            echo "No imparte ningún baile.\n";
        } else {
            foreach ($this->bailes as $baile) {
                echo $baile->getNombre() . " (edad mínima: " . $baile->getEdadMinima() . " años)\n";
            }
        }
    }

}
?>