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
        <form action="form.php" method="POST">
        Nombre: <input type="text" name="nombre" >
        Edad: <input type="text" name="edad">
	Ciudad:
	<select name="ciudad">
		<option value="Barcelona">Barcelona</option>
		<option value="Girona">Girona</option>
		<option value="Lleida">Lleide</option>
		<option value="Tarragona">Tarragona</option>
	</select>
	Sexo:
	Hombre: <input type="radio" name="sex" value="hombre">
	Mujer: <input type="radio" name="sex" value="mujer">
        <input type="submit" value="Enviar">
    </form>
    </body>
</html>
