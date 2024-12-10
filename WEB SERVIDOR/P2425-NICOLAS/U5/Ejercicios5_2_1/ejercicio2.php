<?php

class Articulo{
    private $id;
    private $nombre;

    public function __construct($nombre,$id){
        $this-> nombre= $nombre;
        $this-> id= $id;
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
    public function __clone() {
        $this->nombre ="Otro nombre diferente";
        $this->id= $this->id+1;
    }
} 


?>