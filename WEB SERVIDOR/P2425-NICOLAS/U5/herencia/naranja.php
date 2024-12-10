<?php
require_once 'ejemplo1.php';

class Naranja extends Fruta{

    private $origen;


    public function __construct(){
        parent::__construct("Naranja");
    }
    public function setOrigen($origen){
        $this->origen=$origen;
    }
    public function escribeCaracteristicas(){
        echo "Origen: " . $this->origen;  // Fix this line
    }


}



?>