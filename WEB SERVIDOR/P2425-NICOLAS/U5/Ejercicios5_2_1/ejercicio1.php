<?php

class Persona {
    private $nome;
    private $apellidos;
    private $sexo;
    private $fechaNacimiento;

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

    public function diasVivo(){
        $hoy = new DateTime('now');
        $cumpleaños = new DateTime ($this->fechaNacimiento);
        $diasVivo= $cumpleaños->diff($hoy);

        return "<br/>".$diasVivo->days."días";
    }

    public function setfechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function getfechaNacimiento() {
        return $this->fechaNacimiento;
    }
}

$Persona = new Persona("Nicolas","García");
$Persona->setfechaNacimiento("10-12-1972");
echo $Persona->diasVivo();