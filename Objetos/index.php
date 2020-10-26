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
        
        include 'Sith.php';
        
        $p = new Persona('DAW2',216);
        echo $p;
        $s = new Sith('DAW3',999,'Muy malo');
        echo $s;
        Sith::$PUBSITH=18;
        echo 'El valor publico de Sith vale: '.Sith::$PUBSITH.'<br>';
        $v=array();
        $v[]=$p;
        $v[]=$s;
        
        foreach($v as $dato){
            if ($dato instanceof Persona){
                echo 'En la primera posición hay una persona.'.'<br>';
            }
            if ($dato instanceof Sith){
                echo 'En la segunda hay un Sith'.'<br>';
            }
        }
        ?>
    </body>
</html>
