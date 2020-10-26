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
        $sql = "SELECT * FROM personas where nombre='" . $_REQUEST['nombre']."'";  //Sí: *
        $resultado =  $conexion->query($sql);
        if ($filas = $resultado->fetch_assoc()) {
            echo $filas['nombre'].' '.$filas['edad'].'<br>';
            ?>
            <img src="data:image/png;base64,<?php echo base64_encode($filas['foto']); ?>" alt="titulo foto" />
            <?php
        } else {
            echo 'No encontrado';
        }
        $conexion->close();
        ?>
        <a href="index.php">Volver</a>
    </body>
</html>
