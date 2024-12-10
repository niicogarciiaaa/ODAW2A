<?php
require_once "ejemplo1.php";


class Manzana extends Fruta {

    private $categoria;

    // Constructor de Manzana, llama al constructor de la clase padre
    #[\Override]
    public function __construct(){
        parent::__construct("Manzana");
    }

    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }

    public function escribeCaracteristicas(){
        echo "Categoría: " . $this->categoria;  // Add line break
    }
}

?>