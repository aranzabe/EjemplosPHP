<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personaje
 *
 * @author fernando
 */
class Personaje {
    protected $nombre;
    protected $vida;
    public static $COMUN=12;
    const CTE=8;
    
    function __construct($nombre, $vida) {
        $this->nombre = $nombre;
        $this->vida = $vida;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getVida() {
        return $this->vida;
    }

    static function getCOMUN() {
        return self::$COMUN;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setVida($vida) {
        $this->vida = $vida;
    }

    //abstract function usarEspada();
    
    static function setCOMUN($COMUN) {
        self::$COMUN = $COMUN;
    }

    public function __toString() {
        return "Nombre: ".$this->nombre." vida: ".$this->vida;
    }

    
}
