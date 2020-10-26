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
        require 'libreria.php';
        
        $op1=6;
        $op2=4;
        echo sumar($op1, $op2) .'='.$op1.'+'.$op2.'<br>';
        var_dump($op1);echo '<br>';
        
        $vector=[];
        var_dump($vector);echo '<br>';
//        $vector=array();
        rellenarVector($vector);
        $vector[3]='a';
        $vector[6]=6.3;
        var_dump($vector);echo '<br>';
        print_r($vector);echo '<br>';
        ?>
    </body>
</html>
