<?php


class Persoa{
    private $nome;
    private $apelidos;
    private $mobil;

    function __construct($nome,$apelidos,$mobil){
        $this->nome= $nome;
        $this->apelidos= $apelidos;
        $this->mobil = $mobil;
    }

    function verInformación(){
            return $this->nome.$this->apelidos."(".$this->mobil.")";
    }
}
?>
