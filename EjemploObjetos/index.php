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
        require_once './Alumno.php';
        require_once './Profesor.php';
        require_once './Persona.php';
        
        $p = new Persona('Daniel', 46);
        $pe2 = new Persona('Belén', 45);
        $a = new Alumno('Néstor', 40, 7.2);
        $profe = new Profesor('María', 30, "DAW2");
        echo $p . '<br>';
        echo $pe2 . '<br>';
        echo $a . '<br>';
        echo $profe . '<br>';

        echo Persona::$cuantos . '<br>';
        echo Persona::getCuantos() . '<br>';

        $vec = array();
        $vec[] = $p;
        $vec[] = $pe2;
        $vec[] = $a;
        $vec[] = $profe;
        foreach ($vec as $dato) {
            if ($dato instanceof Alumno) {
                echo 'La nota del alumno es: ' . $dato->getNota() . '(' . $dato . ')' . '<br>';
            } else {
                if ($dato instanceof Profesor) {
                    echo 'Tutoría del profesor: ' . $dato->getTutoria() . '<br>';
                } else {
                    echo 'Genérico: ' . $dato . '<br>';
                }
            }
            $dato->obligada();
            echo '<br>';
        }
        echo 'Constante compartida de las clases alumno ' . Alumno::MAX . ' y profesor ' . Profesor::MAX;
        ?>
    </body>
</html>
