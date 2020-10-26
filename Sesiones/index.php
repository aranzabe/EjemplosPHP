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

        if (isset($_REQUEST['cerrar'])) {
            session_destroy();
            //Comentar y descomentar las siguientes dos líneas.
            session_start();
            session_regenerate_id();
        }
        echo session_id();
        $_SESSION['valor'] = 27;
        ?>
        <form name="cerrar" action="otra.php">
            <input type="submit" name="otra" value="otro">
        </form>

    </body>
</html>
