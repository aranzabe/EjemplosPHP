<?php

require 'Persona.php';

class Alumno extends Persona {
    private $nota;
    
    function __construct($nombre,$edad, $tfno, $nota) {
        parent::__construct($nombre, $edad, $tfno);
        $this->nota = $nota;
    }
    
    function getNota() {
        return $this->nota;
    }

    function setNota($nota) {
        $this->nota = $nota;
    }

    public function __toString() {
        return parent::__toString().' nota: '.$this->nota;
    }


}
