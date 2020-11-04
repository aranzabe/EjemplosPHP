<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Alumno
 *
 * @author fernando
 */
require_once './Persona.php';
require_once './Metodos.php';
class Alumno extends Persona implements Metodos {

    private $nota;

    function __construct($nomb, $ed, $nota) {
        parent::__construct($nomb, $ed);
        $this->nota = $nota;
    }

    function getNota() {
        return $this->nota;
    }

    function setNota($nota): void {
        $this->nota = $nota;
    }

    public function __toString() {
        $valor =  'Alumno: '.parent::__toString().' Nota: '.$this->nota;
        return $valor;
    }

    public function obligada() {
        echo 'De obligado cumplimiento en el alumno';
    }

}
