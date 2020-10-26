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
        require 'Alumno.php';
        
        $p=new Persona('DAW2', 23, 1234);
        echo 'Teléfono: '.$p->getTfno().'<br>';
        $p->setEdad(125);
        echo $p;
        echo 'Valor de la variable estática: '.Persona::$MAX.'<br>';
        Persona::$MAX=180;
        echo 'Valor de la constante: '.Persona::CTE;
        Persona::accesoAestatica();
        $a = new Alumno('Pepe',27,23,4.6);
        echo $a;
        ?>
    </body>
</html>
