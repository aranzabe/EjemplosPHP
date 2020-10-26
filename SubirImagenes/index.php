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
        <form name="add.php" id="add" action="add.php" method="post" enctype="multipart/form-data">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad">
            <label for="imagen">Imagen de perfil</label>
            <input type="file" name="imagen" id="imagen">
            <input type="submit" name="aceptar" value="Aceptar">
        </form>
        <br>
        <br>
        <form name="verDatos" action="ver.php" method="POST">
            <label for="nombre">Nombre a buscar: </label>
            <input type="text" name="nombre" value="">
            <input type="submit" name="aceptar" value="Aceptar">
        </form>
    </body>
</html>
