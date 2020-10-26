<!DOCTYPE html>
<!--
Información de instalación y descarga:

https://www.tuinformaticafacil.com/sistemas-operativos/windows/como-usar-sendmail-desde-php-en-windows
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*
          En sendmail.ini

          [sendmail]
          smtp_server=smtp.gmail.com
          smtp_port=587
          error_logfile=error.log
          debug_logfile=debug.log
          auth_username=AuxiliarDAW2@gmail.com
          auth_password=Chubaca20
          force_sender=AuxiliarDAW2@gmail.com
          smtp_ssl=auto
         * 
         * 
         * En php.ini
         [mail function]
         sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"
         */

        $destino = 'faranzabe@gmail.com';

        $titulo = 'Email recibido';
        $cabeceras = 'From: Equipo' . "\r\n" .
                'Reply-To: ese' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

        $mensaje = "Esto es el mensaje";

        mail($destino, $titulo, $mensaje, $cabeceras);
        echo 'Mensaje enviado';
        ?>
    </body>
</html>
