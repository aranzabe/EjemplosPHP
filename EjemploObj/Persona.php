<?php


class Persona {
    protected $nombre;
    protected $edad;
    protected $tfno;
    public static $MAX=20;
    const CTE=9;
    
    function __construct($nombre, $edad, $tfno) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->tfno = $tfno;
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function getEdad() {
        return $this->edad;
    }

    function getTfno() {
        return $this->tfno;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }

    function setTfno($tfno) {
        $this->tfno = $tfno;
    }

    public function __toString() {
        return $this->nombre.' '.$this->edad;
    }

    public static function accesoAestatica(){
        self::$MAX=20;
    }

}
