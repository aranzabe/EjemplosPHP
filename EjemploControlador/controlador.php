<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    
//---------------------- Venimos del formulario principal ---------------------
if ($_REQUEST['aceptar']){
    session_start();
    $nombre = $_REQUEST['usuario'];
    $pass = $_REQUEST['pass'];
    
    echo $nombre.' '.$pass;
    if ($nombre == 'daw2' && $pass=='1234')
    {
        $_SESSION['nombre'] = $nombre;
        $_SESSION['pass'] = $pass;
        header('Location: valido.php');
    }
    else {
        header('Location: invalido.php');
    }
}

//------------------------ Seleccionamos una cosa ----------------------------
if ($_REQUEST['unacosa']){
    session_start();
    $fact=1;
    for($i=1;$i<=4;$i++){
        $fact = $fact * $i;
    }
    $_SESSION['fact'] = $fact;
    header('Location: resultado.php');
}

//------------------------ Seleccionamos otra cosa ---------------------------
if ($_REQUEST['otracosa']){
    
    header('Location: saludo.php');
}

//------------------------ Cerrar sesión -------------------------------------
if ($_REQUEST['cerrarsesion']){
    session_start();
    unset($_SESSION['nombre']);
    unset($_SESSION['pass']);
    header('Location: index.php');
    
}

//--------------------- Los primeros diez pares ---------------------------
if ($_REQUEST['muestra']){
    session_start();
    $vec[0]=0;
    for($i=1;$i<=10;$i++){
        $vec[$i] = $vec[$i-1] + 2;
    }
    $_SESSION['vec']=$vec;
    header('Location: muestrvector.php');
}
