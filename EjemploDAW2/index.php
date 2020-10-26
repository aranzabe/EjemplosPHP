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
//        if (isset($a)){
//            echo 'Está definida';
//        }
//        else{
//            echo 'No lo está.';
//        }
//        $a=6;
//        if (isset($a)){
//            echo 'Está definida';
//        }
//        else{
//            echo 'No lo está.';
//        }
//        echo 'El valor de la variable es: '.$a.'<br>';
//        $a='otra cosa';
//        echo 'El valor de la variable es: '.$a.'<br>';
//        unset($a);
//        if (isset($a)){
//            echo 'Está definida';
//        }
//        else{
//            echo 'No lo está.';
//        }
        //$vec = array(1,3.6,true,'DAW2');
        $vec = [
            '1A' => 1,
            '2B' => 3.6,
            '3C' => true,
            '4D' => 'DAW2'];
        
        $vec['4D'] = 'DAW3';
        
        //$vec[100]='otra cosa';
        
//        for($i=0;$i < count($vec);$i++){
//            echo $vec[$i].' ';
//        }
        $vec['6F']='nuevo';
        //foreach($vec as $valor)
        foreach($vec as $ind => $valor){
            echo $ind.'-->'.$valor.'<br> ';
        }
        
        
        /*
        $vec=array();
        $vec=[];
         * Para crear vectores vacíos.
         */
        ?>
        <form name="formulario" action="validar.php" method="POST">
            <input type="text" name="nombre[]" value=""><br>
            <input type="text" name="nombre[]" value=""><br>
            <input type="text" name="nombre[]" value=""><br>
            <input type="text" name="nombre[]" value=""><br>
            <input type="submit" name="Aceptar" value="Aceptar">
        </form>
        
    </body>
</html>
