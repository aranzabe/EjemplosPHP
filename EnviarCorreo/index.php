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
        //Instalamos con: sudo apt-get install libphp-phpmailer. Se podría hacer con sendmail pero es más rollo.
        require '/usr/share/php/libphp-phpmailer/class.phpmailer.php';
        require '/usr/share/php/libphp-phpmailer/class.smtp.php';

        $email_user = "AuxiliarDAW2@gmail.com";
        $email_password = "Chubaca20";
        $the_subject = "Phpmailer prueba";
        $address_to = "faranzabe@gmail.com";
        $from_name = "Fernando Aranzabe";
        $phpmailer = new PHPMailer();
        // ---------- datos de la cuenta de Gmail -------------------------------
        $phpmailer->Username = $email_user;
        $phpmailer->Password = $email_password;
        //-----------------------------------------------------------------------
        // $phpmailer->SMTPDebug = 1;
        $phpmailer->SMTPSecure = 'ssl'; //Puede ser TSL pero el puerto sería 587.
        $phpmailer->Host = "smtp.gmail.com"; // GMail
        $phpmailer->Port = 465;
        $phpmailer->IsSMTP(); // use SMTP
        $phpmailer->SMTPAuth = true;
        $phpmailer->setFrom($phpmailer->Username, $from_name);
        $phpmailer->AddAddress($address_to); // recipients email
        $phpmailer->Subject = $the_subject;
        $phpmailer->Body .= "<h1 style='color:#3498db;'>Un dos, si, hey, si, un dos!!!!</h1>";
        $phpmailer->Body .= "<p>Mensaje personalizado</p>";
        $phpmailer->Body .= "<p>Fecha y Hora: " . date("d-m-Y h:i:s") . "</p>";
        $phpmailer->IsHTML(true);
        if ($phpmailer->send()){
            echo 'Correo enviado.';
        }
        else {
            echo 'Se ha producido algún error en el envío.';
        }


//Lo que viene a continuación sería para windows. Bajando la librería sendmail y configurando php.ini y sendmail.ini en XAMPP.        
//        $desde = "AuxiliarDAW2@gmail.com";
//        $destinatario = 'faranzabe@gmail.com';
//        $titulo = 'Validacion cuenta';
//        $cabeceras = phpversion();
//        //$cabeceras = "From:" . $desde;
//        $mensaje = 'Tu cuenta ha sido validada';
//        //mail($destinatario, $titulo, $mensaje);
//        mail($destinatario, $titulo, $mensaje, $cabeceras);
//        echo "El correo ha sido enviado.";
//
//        $cabeceras = 'From: webmaster@example.com' . "\r\n" .
//                'Reply-To: webmaster@example.com' . "\r\n" .
//                'X-Mailer: PHP/' . phpversion();
//
//        mail($para, $titulo, $mensaje, $cabeceras);
//        $destino = 'faranzabe@gmail.com';
//
//        $titulo = 'Email recibido';
//        $cabeceras = 'From: Equipo' . "\r\n" .
//                'Reply-To: ese' . "\r\n" .
//                'X-Mailer: PHP/' . phpversion();
//
//        $mensaje = "Estamos estudiando su solicitud, recibirá un correo con toda la información necesaria";
//
//        mail($destino, $titulo, $mensaje, $cabeceras);
//        echo "El correo ha sido enviado.";
        ?>
    </body>
</html>
