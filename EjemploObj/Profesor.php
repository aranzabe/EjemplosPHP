<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Profesor
 *
 * @author faranzabe
 */
require_once 'Persona.php';
class Profesor extends Persona {
    private $an;
    
    function __construct($nombre, $edad, $tfno, $an) {
        parent::__construct($nombre, $edad, $tfno);
        $this->an = $an;
    }

    function getAn() {
        return $this->an;
    }

    function setAn($an) {
        $this->an = $an;
    }

    public function __toString() {
        return parent::__toString().' Años:'.$this->an;
    }

    
}
