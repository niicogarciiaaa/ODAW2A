<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="procesar.php" method="post">
            <p>Nombre:  <input type="text" name="nombre"></p>
            <p>Apellido:  <input type="text" name="apellido"></p>
            <p>Sexo:  <input type="radio" name="rsexo" value="mujer">Mujer</input>
                <input type="radio" name="rsexo" value="hombre">Hombre</input></p>
            
            <p><input type="checkbox" name="casiña1"/></p>
            <p><input type="checkbox" name="casiña2"/></p>
            <p><input type="checkbox" name="casiña3" value="Tres" /></p>
             <input type="submit" name="enviar" value="Enviar"/>
        </form>
    </body>
</html>
