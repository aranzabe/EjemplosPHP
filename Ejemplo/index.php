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
        function suma(&$v1, $v2){
            $total = $v1 + $v2;
            return $total;
        }
        
        function resta(&$v1, $v2){
            $total = $v1 + $v2;
            return $total;
        }
        
        $a=10;
        $b=8;
        echo loquesea($a,$b).'<br>';
        echo $a.'<br>';
        echo $b.'<br>';
        ?>
        
        <form name="ejemplo" action="valida.php" method="POST">
            <input type="text" name="caja" value="">
            <input type="number" name="numero" value="0">
            <input type="submit" name="aceptar" value="Aceptar">
            <input type="submit" name="cancelar" value="Cancelar">
        </form>
    </body>
</html>
