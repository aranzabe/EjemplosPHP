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
        $url = "http://localhost/DAW2_20_21/ServicioWEBMYSQLJSON/index.php?DNI=".$_REQUEST['dni'];
        //Si queremos ocultar en la url de la dirección el DNI.
        //$url = "http://localhost/DAW2_20_21/ServicioWEBMYSQLJSON/index.php?DNI=".md5($_REQUEST['dni']);
        $ch = curl_init($url); //--> Este servicio lo sirve PHP.
        //true si es correcto, false si no lo es
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //establecemos el verbo http que queremos utilizar para la petición
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        //enviamos el array data
        //curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        //obtenemos la respuesta
        $response = curl_exec($ch);
        // Se cierra el recurso CURL y se liberan los recursos del sistema
        curl_close($ch);
        if (!$response) {
            return false;
        } else {
            $objs = json_decode($response);
            //var_dump($objs);
            if (isset($objs[0]->Mensaje)) {
                echo 'No encontrado'.'<br>';
            } else {
                foreach ($objs as $o) {
                    echo $o->DNI . ', ' . $o->Nombre . ', ' . $o->Tfno . '<br>';
                }
            }
            echo '<br>';
        }
        ?>
        <a href="index.php">Volver</a>
    </body>
</html>
