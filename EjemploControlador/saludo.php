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
        echo 'Hola: '.$_SESSION['nombre'].'<br>';
        ?>
        <form name="formcerrar" action="controlador.php" method="POST">
            <input type="submit" name="cerrarsesion" value="Cerrar sesión">
        </form>
        <a href="valido.php">Volver</a>
    </body>
</html>
