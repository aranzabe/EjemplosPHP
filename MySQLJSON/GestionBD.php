<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GestionBD
 *
 * @author faranzabe
 */
class GestionBD {
    static private $conexion;

    static function nuevaConexion() {
        self::$conexion = mysqli_connect('localhost', 'fernando', 'Chubaca2018', 'ejemplo');
    }

    static function getPersonasJSON() {
        self::nuevaConexion();
        $consulta = "SELECT * FROM personas";
        //mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

        $datos = array();
        if ($resultado = mysqli_query(self::$conexion, $consulta)) {
            while ($fila = mysqli_fetch_array($resultado)) {
                $datos[] = array('DNI' => $fila['DNI'],
                                 'Nombre' => $fila['Nombre'],
                                 'Tfno' => $fila['Tfno']);
            }
        }
        self::cerrarConexion();
        $json_string = json_encode($datos);
        return $json_string;
    }
    
    static function cerrarConexion(){
        mysqli_close(self::$conexion);
    }
}
