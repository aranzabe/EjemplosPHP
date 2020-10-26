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

    function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function __destruct() {
        echo 'Persona acabando.' . '<br>';
    }

    public function __toString() {
        return $this->nombre . '<br>';
    }

    public function habla() {
        echo 'Hola' . '<br>';
    }

}
