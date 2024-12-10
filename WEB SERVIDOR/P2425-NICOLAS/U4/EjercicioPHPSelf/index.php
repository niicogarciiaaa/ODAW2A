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
        <form action="agente.php" method="post" enctype="multipart/form-data" >
    <fieldset>
        <label for="NC">Nombre Completo:<input type="text" name="nombreCompleto" id="NC"/></label><br>
        <label for="NU">Nombre de Usuario:<input type="text" name="nombreUsuario" id="NU"/></label><br>
        <label for="CO">Contraseña:<input type="text" name="Contrasenha" id="CO"/> Mínimo 6 carácteres</label><br>
        <label for="Ed">Edad:<input type="text" name="edad" id="Ed"/></label><br>
        <label for="FN">Fecha de nacimiento:<input type="text" name="FechaNacimiento" id="FN"/></label><br>
        <label for="Em">e-mail<input type="text" name="email" id="Em"/></label><br>
        <label for="URL">URL<input type="text" name="URL" id="URL"/></label><br>
        <label for="IP">IP<input type="text" name="IP" id="IP"/></label><br>
        <label for="DH">Descripción de los hobbies<textarea id="DH" name="Descripcion"></textarea></label><br>
        <label for="RI"><input type="checkbox" name="recibirInfo" id="RI">Recibir Informacion</label><br>
        <label>Sexo
                            <label for="HO"><input type="radio" name="sexo" value="hombre"id="HO" checked/>Hombre</label>
                            <label for="MU"><input type="radio" name="sexo" value="mujer"id="MU"/>Mujer</label><br>
        </label>
        <label for="LEA">Idioma:
            <select name="Idiomas">
                <option value="Catalan">Catalan</option>
                <option value="Italiano">italiano</option>
                <option value="Inglés">Inglés</option>
                <option value="Francés">Francés</option>
                <option value="Alemán">Alemán</option>
            </select></br>
            <label for="AR">Curriculo:<input type="file" name="archivo1" id="AR"/></label>
        </label>
        <input type="submit" name="Enviar">
    </fieldset>
</form>
    </body>
</html>
