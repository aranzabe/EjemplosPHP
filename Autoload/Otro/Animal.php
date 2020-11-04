<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Animal
 *
 * @author fernando
 */
class Animal {

    private $raza;

    function __construct($raza) {
        $this->raza = $raza;
        $this->raza = new Persona('Yo que sé');
        echo $this->raza;
    }

    public function __toString() {
        return $this->raza . '<br>';
    }

    public function __destruct() {
        echo 'Acabando el animal'.'<br>';
    }
    
    public function ladra(){
        echo 'Guau'.'<br>';
    }

}
