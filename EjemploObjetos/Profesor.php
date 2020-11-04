<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Profesor
 *
 * @author fernando
 */
require_once './Persona.php';
require_once './Metodos.php';

class Profesor extends Persona implements Metodos{
    private $tutoria;
    
    function __construct($nomb, $ed, $tutoria) {
        parent::__construct($nomb, $ed);
        $this->tutoria = $tutoria;
    }
    
    function getTutoria() {
        return $this->tutoria;
    }

    function setTutoria($tutoria): void {
        $this->tutoria = $tutoria;
    }

    public function __toString() {
        return parent::__toString().' Tutoría: '.$this->tutoria;
    }

    public function obligada() {
        echo 'Método obligatorio en profesor';
    }

}
