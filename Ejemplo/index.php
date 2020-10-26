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
        require './libreria.php';
        if (!isset($a)){
            echo 'Todavía no se ha establecido la variable'.'<br>';
        }
        $a=10;
        if (isset($a)){
            echo 'Variable a establecida'.'<br>';
        }
        $b=8;
        echo 'Antes de la llamada'.'<br>';
        echo 'Valor de a: '.$a.'<br>';
        echo 'Valor de b: '.$b.'<br>';
        echo 'Valor de la llamada a la función suma con el primer parámetro por referencia: '.sumaReferencia($a,$b).'<br>';
        echo 'Después de la llamada'.'<br>';
        echo 'Valor de a: '.$a.'<br>';
        echo 'Valor de b: '.$b.'<br>';
        echo 'Valor de la llamada a la función suma con el primer parámetro por valor: '.sumaValor($a,$b).'<br>';
        echo 'Después de la llamada'.'<br>';
        echo 'Valor de a: '.$a.'<br>';
        echo 'Valor de b: '.$b.'<br>';
        
        ?>
        
        
        
        <form name="ejemplo" action="valida.php" method="POST">
            <input type="text" name="caja" value="">
            <input type="number" name="numero" value="0"><br>
            <input type="submit" name="aceptar" value="Aceptar">
            <input type="submit" name="cancelar" value="Cancelar"><br>
        </form>
    </body>
</html>
