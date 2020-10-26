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
        $conexion = new mysqli('localhost', 'fernando', 'Chubaca2018', 'subirimagenesPHP');
        $fotoBin = $conexion->real_escape_string(file_get_contents($_FILES["imagen"]["tmp_name"]));
        $sentencia = "INSERT INTO personas VALUES (0,'".$_REQUEST['nombre']."','". $_REQUEST['edad']."','".$fotoBin."')";
        $conexion->query($sentencia);
        $conexion->close();
        echo 'Inserción Ok.'.'<br>';
        ?>
        <a href="index.php">Volver</a>
    </body>
</html>
