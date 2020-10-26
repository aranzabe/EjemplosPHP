<!DOCTYPE html>
<!--
 El campo oculto MAX_FILE_SIZE (medido en bytes) debe preceder al campo de entrada del fichero, 
 siendo su valor el tamaño de fichero máximo aceptado por PHP. Se debe utilizar siempre este 
 elemento del formulario, ya que evita a los usuarios la molestia de esperar a que un fichero 
 grande sea transferido sólo para descubrir que falló la transferencia porque era demasiado grande. 
 Hay que tener en cuenta que engañar a esta configuración en el lado del navegador es muy fácil; 
 nunca dependa de que los ficheros que tengan un tamaño mayor sean bloqueados por esta característica. 
 Es simplemente una característica conventiene para los usuarios en el lado cliente de la aplicación. 
 No obstante, la configuración de PHP (en el lado del servidor) para un tamaño máximo no puede ser engañada.

 Nota:

 Asegúrate de que el formulario de subida de ficheros tiene el atributo enctype="multipart/form-data" o 
 de lo contrario la subida de ficheros no funcionará. 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!-- El tipo de codificación de datos, enctype, DEBE especificarse como sigue -->
        <form enctype="multipart/form-data" action="subida.php" method="POST">
            <!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
            <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
            <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
            Enviar este fichero: <input name="fichero_usuario" type="file" /><br>
            <input type="submit" value="Enviar fichero" />
        </form>
    </body>
</html>
