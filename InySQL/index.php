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
        $conexion = mysqli_connect('localhost', 'fernando', 'Chubaca2018', 'ejemplo');
        print "Conexión realizada de forma procedimental: " . mysqli_get_server_info($conexion) . "<br/>";

        //De forma procedimental.
        echo '------------- Esta select está hecha con prevención de inyección procedimental -----------------------' . '<br>';
        $sentencia = "SELECT * FROM personas WHERE DNI = ?";
        $stmt = mysqli_stmt_init($conexion);
        if (mysqli_stmt_prepare($stmt, $sentencia)) {

            mysqli_stmt_bind_param($stmt, "s", $val1);
            $val1 = "101A";
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            while ($fila = mysqli_fetch_array($result)) {
                var_dump($fila);
                echo 'DNI: ' . $fila[0] . '<br>';
                echo 'Nombre: ' . $fila[1] . '<br>';
                echo 'Tfno: ' . $fila[2] . '<br>';
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conexion);

        //Orientada a objetos.
        echo '<br><br>';
        echo '------------- Esta select está hecha con prevención de inyección orientada a objetos -----------------------' . '<br>';
        $conexion = new mysqli("localhost", "fernando", "Chubaca2018", "ejemplo");
        $stmt = $conexion->prepare('SELECT * FROM personas WHERE DNI = ?');
        $stmt->bind_param("s", $val1);
        $val1 = "101A";
        $stmt->execute();
        $result = $stmt->get_result();
        var_dump($result);
        while ($fila = $result->fetch_assoc()) {
            var_dump($fila);
            echo 'DNI: ' . $fila['DNI'] . '<br>';
            echo 'Nombre: ' . $fila['Nombre'] . '<br>';
            echo 'Tfno: ' . $fila['Tfno'] . '<br>';
        }
        $stmt->close();
        $conexion->close();
        ?>
    </body>
</html>
