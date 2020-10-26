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
        session_start();

        $valor = $_SESSION['valor'];
        echo 'El valor es: ' . $valor;
        ?>
        <form name="cerrar" action="index.php">
            <input type="submit" name="cerrar" value="Cerrar sesión">
        </form>
    </body>
</html>
