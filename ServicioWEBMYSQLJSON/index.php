<?php

require_once 'GestionBD.php';

$datJSON = GestionBD::getPersonaJSON($_REQUEST['DNI']);

//Si ocultamos el DNI de la url usamos esta opción.
//$datJSON = GestionBD::getPersonaJSON(md5($_REQUEST['Clave']));
echo $datJSON;
?>

