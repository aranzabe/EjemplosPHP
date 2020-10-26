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
require 'Personaje.php';
require 'Metodos.php';
class Sith extends Personaje implements Metodos {
    private $maldad;
    
    function __construct($nom, $vid, $maldad) {
        parent::__construct($nom, $vid);
        $this->maldad = $maldad;
    }
    
    function getMaldad() {
        return $this->maldad;
    }

    function setMaldad($maldad) {
        $this->maldad = $maldad;
    }

    public function __toString() {
        return parent::__toString().' maldad: '.$this->maldad;
    }

    public function usarEspada() {
        
    }

    public function usarLaser() {
        
    }

}
