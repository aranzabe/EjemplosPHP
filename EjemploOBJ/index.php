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
        require 'Persona.php';
        require 'Tablero.php';
        $t = new Tablero(10,3);
        $t->generarPistas();
        
        $p = new Persona('DAW2',20);
        echo $p;
        echo $p->getNombre();
        echo Persona::$COMUN;
        ?>
    </body>
</html>
