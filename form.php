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
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $ciudad = $_POST['ciudad'];
        $sexo = $_POST['sex'];
        
        echo ("Te llamas ". $nombre ." tienes ". $edad ." años, vives en ". $ciudad ." y eres ". $sexo)
        ?>
    </body>
</html>
