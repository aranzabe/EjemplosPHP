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
//        // Utilizando constructores y métodos de la programación orientada a objetos.
        $conexion = new mysqli('localhost', 'fernando', 'Chubaca2018', 'ejemplo');
        print "Conexión realizada con el objeto mysqli: " . $conexion->server_info . "<br/>";

        if ($stmt = $conexion->prepare('SELECT * FROM personas WHERE DNI = ? AND Nombre = ?')) {
            $dn = '1A';
            $no = 'Cristina';
            $stmt->bind_param("ss", $dn, $no);
            $stmt->execute();
            $stmt->bind_result($DNI, $Nombre, $Tfno); 
            
            while ($stmt->fetch()) {
                echo 'DNI: ' . $DNI . '<br>';
                echo 'Nombre: ' . $Nombre . '<br>';
                echo 'Teléfono: ' . $Tfno . '<br>';
            }
            $stmt->close();
            $conexion->close();
//        
            print "Conexión cerrada" . "<br />";
//        http://www.elcodigofuente.com/mysqli-orientado-objetos-conectarse-base-datos-589/
        }
        ?>
    </body>
</html>
