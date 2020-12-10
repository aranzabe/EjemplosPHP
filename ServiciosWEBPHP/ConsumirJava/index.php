<!DOCTYPE html>
<!--
Consumimos un servicio creado en Java Rest http://localhost:8080/EjemploGF/app/ServicioDatos/2




cURL es una librería que permite realizar peticiones HTTP con el objetivo de transferir información con sintaxis de URL.
En el contexto de PHP, permite armar un script que literalmente se comporte como un navegador para así realizar una petición a otro servidor remoto.

Su utilidad es muy similar al objeto XMLHttpRequest de JavaScript en el sentido de comunicarse con un servidor distinto para la obtención de recursos, datos u otra información.

En PHP se implementa como un conjunto de funciones, cuyas principales que más se usan son:

    curl_init – Inicia una nueva sesión cURL
    curl_setopt – Define opciones para nuestra sesion cURL
    curl_getinfo – Obtiene información de la última transferencia
    curl_exec – Ejecuta la petición HTTP
    curl_close – Cierra la sesión CURL

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //datos a enviar
        //$data = array("a" => "a");
        //url contra la que atacamos
        //$ch = curl_init("http://localhost:8080/EjemploGF/app/ServicioDatos"); //Servicio creado en JSP.
        //$ch = curl_init("http://localhost:8080/EjemploGF/app/ServicioDatos/2"); //Servicio creado en JSP.
        //$ch = curl_init("http://localhost:8080/EjemploGF/app/ServicioDatos/otro?id=3");
        //$ch = curl_init("http://localhost/DAW2_19_20/WebServices/Rest/ServiciosWEBPHP/ServicioPHP/index.php/"); //--> Este servicio lo sirve PHP.
        $ch = curl_init("http://servicios.ine.es/wstempus/js/es/DATOS_TABLA/29009?tip=AM");
        //http://localhost/DAW2_19_20/WebServices/Rest/ServiciosWEBPHP/ServicioPHP/index.php
        //a true, obtendremos una respuesta de la url, en otro caso, 
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
            echo '<br>';
            var_dump($response);

            // Read JSON file
            //$readjson = file_get_contents('employees.json');

            //Decode JSON
            $data = json_decode($response, true);

            //Print data
            echo '<br>';
            print_r($data);
//            echo "<br/><br/> Datos obtenidos del servicio Java: <br/>";
//
//            //Parse the employee name
//            foreach ($data as $emp) {
//                echo $emp['num'] .' '.$emp['texto']. "<br/>";
//            }
        }
        ?>
    </body>
</html>
