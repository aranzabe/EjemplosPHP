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
        $texto = $_REQUEST['caja'];
        $numero = $_REQUEST['numero'];
        echo $texto.' '.$numero.'<br>';
        if (isset($_REQUEST['aceptar'])){
            echo 'Has pulsado aceptar';
        }
        else {
            echo 'Has pulsado cancelar';
        }
        ?>
        <br>
        <a href="index.php">Volver</a>
    </body>
</html>
