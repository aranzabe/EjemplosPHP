<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Persona
 *
 * @author fernando
 */
class Persona {
    private $nombre;
    private $edad;
    static $COMUN=9;
    
    function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function getEdad() {
        return $this->edad;
    }

    static function getCOMUN() {
        return self::$COMUN;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }

    static function setCOMUN($COMUN) {
        self::$COMUN = $COMUN;
    }

    public function __toString() {
        return $this->nombre.' '.$this->edad.'<br>';
    }


}
