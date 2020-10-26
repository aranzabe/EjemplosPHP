<!DOCTYPE html>
<!--
 Por defecto, los ficheros se almacenan en el directorio temporal predeterminado 
 del servidor, a menos que se haya indicado otra ubicaicón con la directiva 
 upload_tmp_dir en php.ini. Se puede cambiar el directorio predeterminado del 
 servidor estableciendo la variable de entorno TMPDIR en el entorno en que se 
 ejecuta PHP. Configurarlo usando putenv() desde un script de PHP no funcionará. 
 Esta variable de entorno también se puede utilizar para asegurarse de que las 
 demás operaciones están trabajando sobre los ficheros subidos.

Ejemplo: Validación de la subida de ficheros

Véanse también las entradas de las funciones is_uploaded_file() y move_uploaded_file() 
para más información. El siguiente ejemplo procesará la subida de fichero desde un formulario. 

Importante: En Linux hay que darle los permisos 777 a la carpeta de destino.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //$dir_subida = '/var/www/html/DAW2_18_19/EjemploSubidaFicheros/'; //--> Si queremos dar la ruta absoluta.
        $dir_subida = './';
        $fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);
        echo '<pre>';
        echo 'Fichero: ' . basename($_FILES['fichero_usuario']['name']) . '<br>';
        echo 'Temporal: ' . basename($_FILES['fichero_usuario']['tmp_name']) . '<br>';
        echo 'Almacenado en: ' . $fichero_subido. '<br>';
        if ($_FILES["fichero_usuario"]["error"] > 0) {
            echo "Return Code: " . $_FILES["fichero_usuario"]["error"] . "<br />";
        } else {
            if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
                echo "El fichero es válido y se subió con éxito.<br>";
                echo 'Almacenado en: ' . $fichero_subido;
            } else {
                echo "Ha ocurrido algún error.<br>";
            }
        }
        echo 'Más información de depuración:<br>';
        print_r($_FILES);
        print "</pre>";
        ?>
    </body>
</html>
