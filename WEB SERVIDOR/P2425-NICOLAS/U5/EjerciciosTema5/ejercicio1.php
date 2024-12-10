<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Persona {
    private $nome;
    private $apellidos;
    private $sexo;

    public function __construct($nome, $apellidos, $sexo = "H") {
        $this->nome = $nome;
        $this->apellidos = $apellidos;
        $this->sexo = $sexo;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    // Setter y Getter para $apellidos
    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    // Setter y Getter para $sexo
    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function getSexo() {
        if ($this->sexo == "H") {
            return "hombre";
        } elseif ($this->sexo == "M") {
            return "mujer";
        } else {
            return "desconocido";
        }
    }

    public function informacionPersona(): string {
        return "Persona[nome=" . $this->nome
                . ", apellidos=" . $this->apellidos
                . ", sexo=" . $this->getSexo()
                . "]";
    }
}

$p1 = new Persona("Nicolas", "García Moreira");
echo $p1->informacionPersona();
?>




