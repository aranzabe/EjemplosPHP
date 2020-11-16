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
        require_once 'GestionBD.php';
        
        
        $datJSON = GestionBD::getPersonasJSON();
        echo $datJSON.'<br>';
        //var_dump($datJSON);
        echo '<br>';
        
        //json_decode decodifica el JSON en un vector de objetos.
        $objs = json_decode($datJSON);
        //var_dump($objs);
        foreach ($objs as $o){
            echo $o->DNI.', '.$o->Nombre.', '.$o->Clave.', '.$o->Tfno.'<br>';
        }
        echo '<br>';
        
        $vectAsoc = json_decode($datJSON, true);
        //Cuando es TRUE, los object devueltos serán convertidos a array asociativos. 
        //var_dump($vectAsoc);
        foreach($vectAsoc as $dato){
            echo $dato['DNI'].', '.$dato['Nombre'].', '.$dato['Clave'].', '.$dato['Tfno'].'<br>';
        }
        ?>
    </body>
</html>
