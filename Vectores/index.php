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
        function manipularVector(&$a){
            $a[] = 12000;
        }
        
        
        $vec[0] = 10;
        $vec[1] = 14;
        $vec[] = 20;
        $vec[] = 30;
        $vec[156] = 'cadena';
        $vec[] = true;
        $vec['DAW2'] = 12.8;
        manipularVector($vec);
        
        unset($vec[2]);
        for($i=0;$i<count($vec);$i++){
            echo $i.' --> '.$vec[$i].'<br>';
        }
        echo '---------------------------'.'<br>';
        $vec['DAW2'] = 'otra cosa';
        foreach ($vec as $cod => $dato) {
            echo $cod.'-->'.$dato.'<br>';
        }
        echo $vec['DAW2'].'<br>';
        
        
        //Definición manual de arrays.
        echo '---------------------------'.'<br>';
        $v = array('DAW1' => 1, 'DAW2' => true, 'a', 'otra cosa');
        //o
        //$v = ['DAW1' => 1, 'DAW2' => true, 'a', 'otra cosa'];
        foreach ($v as $cod => $dato) {
            echo $cod.'-->'.$dato.'<br>';
        }
        echo '---------------------------'.'<br>';
        
        $v2 = [
            'DAW1' => 10,
            'DAW2' => 20,
            -15
        ];
        
        $v2['DAW1'] = 120;
        $v2['DAW2'] = 2389;
        $v2[]= -30;
        
        foreach ($v2 as $cod => $dato) {
            echo $cod.'-->'.$dato.'<br>';
        }
        
        ?>
    </body>
</html>
