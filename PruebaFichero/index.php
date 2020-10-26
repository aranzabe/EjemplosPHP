<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
chmod 777 -R carpeta -> Para que funcione en Linux.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $mensa = "Esto va al fichero";
        $file = fopen("./sesiones.txt", "a");
        fwrite($file, $mensa . PHP_EOL);
        fclose($file);
        echo 'Escritura realizada';
        ?>
    </body>
</html>
