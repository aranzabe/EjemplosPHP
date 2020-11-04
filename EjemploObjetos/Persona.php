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

    protected $nombre;
    protected $edad;
    public static $cuantos;

    function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $this->azar();
        self::$cuantos++;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getEdad() {
        return $this->edad;
    }

    function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    function setEdad($edad): void {
        $this->edad = $edad;
    }

    function __toString() {
        return 'Nombre: ' . $this->nombre . ' Edad: ' . $this->edad;
    }

    public static function getCuantos() {
        return self::$cuantos;
    }

    private function azar() {
        return rand(1,100);
    }
    
    public function obligada() {
        echo 'Método obligatorio en persona';
    }

}
