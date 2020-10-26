<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function autoload($clase) {
            include 'Clases/' . $clase . '.php';
        }

        function miAutoloadDos($clase) {
            require 'Otro/'.$clase.'.php';
        }
        spl_autoload_register('autoload');
        spl_autoload_register("miAutoloadDos");
        
        ?>

        <?php
        $p = new Persona('DAW2');
        $a = new Animal('Chucho callejero');
        echo $p;
        echo $a;
        $p->habla();
        $a->ladra();
        ?>
    </body>
</html>
