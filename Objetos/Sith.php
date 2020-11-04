<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sith
 *
 * @author fernando
 */
include 'Metodos.php';
include 'Persona.php';

class Sith extends Persona implements Metodos {
    private $maldad;
    public static $PUBSITH;
    
    function __construct($nombre,$edad,$maldad) {
        parent::__construct($nombre, $edad);
        $this->maldad = $maldad;
    }

    function getMaldad() {
        return $this->maldad;
    }

    function setMaldad($maldad) {
        $this->maldad = $maldad;
    }

    public function __toString() {
        return 'Soy un Sith. '.parent::__toString();
    }

    public function algo() {
        
    }

//    abstract public function algo() {
//        
//    }

}
