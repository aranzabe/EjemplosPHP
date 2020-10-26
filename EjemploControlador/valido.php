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
        echo 'Bienvenido'.$_SESSION['nombre'].'<br>';
        echo 'Qué desea hacer';
        ?>
        <form name="form1" action="controlador.php" method="POST">
            <input type="submit" name="unacosa" value="Factorial de 4">
        </form>
        <form name="form2" action="controlador.php" method="POST">
            <input type="submit" name="otracosa" value="Salúdame">
        </form>
        <form name="form2" action="controlador.php" method="POST">
            <input type="submit" name="muestra" value="Muéstrame los primeros 10 pares">
        </form>
        
        <form name="formcerrar" action="controlador.php" method="POST">
            <input type="submit" name="cerrarsesion" value="Cerrar sesión">
        </form>
    </body>
</html>
