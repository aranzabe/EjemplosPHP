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
        require 'Personaje.php';
        require 'Metodos.php';
        require 'Sith.php';
        $p = new Personaje("Chubaca", 10);
        //echo $p.'<br>';
        $p->setNombre("Vader");
//        echo $p.'<br>';
//        echo Personaje::getCOMUN().'<br>';
        $s = new Sith("Darth", 45, 1000);
        //echo $s.'<br>';
        $v = array();
        $v[] = $p;
        $v[] = $s;
        foreach ($v as $dato) {
            if ($dato instanceof Personaje) {
                echo 'es un personaje' . '<br>';
            }
            if ($dato instanceof Sith) {
                echo 'es un sith' . '<br>';
            }
            echo $dato . '<br>';
        }
        ?>
    </body>
</html>
