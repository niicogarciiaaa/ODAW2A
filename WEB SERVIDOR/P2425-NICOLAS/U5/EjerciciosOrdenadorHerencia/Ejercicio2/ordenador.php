<?php
include_once 'procesador.php';
include_once 'memoria.php';
include_once 'DiscoDuro.php';

class Ordenador {
    private $nSerie;
    private $marca;
    private $modelo;
    private $memoria;
    private $procesador;
    private $discoDuro;

    function __construct($nSerie = "", $marca = "", $modelo = "", $memoria=null, $procesador=null, $discoDuro=null) {
        if($discoDuro==null){
            $this->discoDuro = new DiscoDuro();
        }else{
            $this->discoDuro = $discoDuro;
        }
        if($memoria==null){
            $this->memoria = new Memoria();
        }else{
            $this->memoria = $memoria;
        }
        if($procesador== null){
            $this->procesador = new procesador();
        }else{
            $this->procesador = $procesador;

        }
        $this->nSerie = $nSerie;
        $this->marca = $marca;
        $this->modelo = $modelo;
        
        
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
        return "Número de Serie: " . $this->nSerie . 
               " | Marca: " . $this->marca . 
               " | Modelo: " . $this->modelo ."<br/>".
               "  Disco Duro: " . $this->discoDuro->consultar()."<br/>".
               " Procesador: " . $this->procesador->consultar() ."<br/>".
               "Memoria: " . $this->memoria->consultar() ;
    }
}
?>

