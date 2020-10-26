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
        $mat = [
            [1, 2, 3],
            [4, 5, 6]
        ];
        $mat2 = array(
            array('a', 'b', 'c'),
            array('d', 'e', 'f')
        );

        for ($i = 0; $i < count($mat); $i++) {
            for ($j = 0; $j < count($mat[0]); $j++) {
                echo $mat[$i][$j] . ' ';
            }
            echo '<br>';
        }

        //$mat[2][1] = new Persona();
        
//        foreach($mat2 as $i => $fila){
//            foreach($fila as $j => $valor){
//                echo $i.','.$j.'='.$valor;
//            }
//            echo '<br>';
//        }
        foreach ($mat2 as $fila) {
            foreach ($fila as $valor) {
                echo $valor;
            }
            echo '<br>';
        }
        ?>
    </body>
</html>
