<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

/*
EJERCICIO 1
 Crear un nuevo proyecto Netbeans que contenga un archivo registro. php.
 Tomar como punto de partida los ficheros registro. php y ejemplo. php implementados nunha
actividade anterior.
 Estructurar el código como en el ejemplo de PHP_ SELF.
 Crear una función incForm que se encargue de mostrar el formulario, ya sea con los campos
vacíos, ya sea con los valores que introdujo el usuario en el anterior submit. Los campos que
deberá cubrir siempre el usuario son la contraseña y el currículo.
 Crear una función mostrarValores que muestre los valores recibidos en el formulario. Esta
función se llamará únicamente en el caso en que el formulario no presente ningún error en la
verificación y validación.
 Mostrará también información sobre el entorno del servidor por lo que se deberá elegir cinco
elementos del array $_ SERVER.
 Capturar la ventana del navegador web donde se muestre tanto a URL en la barra de
direcciones como el resultado de visitar el fichero registro. php con valores correctos en los
campos sin hacer submit.
 Capturar la ventana del navegador web donde se muestre tanto a URL en la barra de
direcciones como el resultado hacer submit en el formulario llenado en el punto anterior y el
resultado visualizado por la llamada a mostrarValores.
 Capturar la ventana del navegador web donde se muestre tanto a URL en la barra de
direcciones como el resultado de visitar el fichero registro. php con valores que contengan
algún error sin hacer submit.
 Capturar la ventana del navegador web donde se muestre tanto a URL en la barra de
direcciones como el resultado hacer submit en el formulario llenado en el punto anterior.
*/

    function incForm($nombre, $usuario, $contrasenha, $edad, $fechaNacimiento, $mail, $paginaPersonal, $direccionIP, $hobbies, $informacion,
                        $sexo, $lenguaExtranjera){
       
    }
?>
            <form action=<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <label for="nombreC">Nombre completo: <input type="text" name="nombreCompleto" id="nombreC" value="<?php echo $nombre;?>"/></label>
            </br>
            <label for="nombreU">Nombre de usuario: <input type="text" name="nombreUsuario" id="nombreU" value="<?php echo $usuario;?>"/></label>
            </br>
            <label for="contrasenha">Contraseña: <input type="text" name="Contrasenha" id="contrasenha" value="<?php echo $contrasenha;?>"/></label>
            </br>
            <label for="edad">Edad: <input type="text" name="Edad" id="edad" value="<?php echo $edad;?>"/></label>
            </br>
            <label for="fechaNac">Fecha de Nacimiento: <input type="text" name="fechaNacimiento" id="fechaNac" value="<?php echo $fechaNacimiento;?>"/></label>
            </br>
            <label for="mail">Email: <input type="text" name="email" id="mail" value="<?php echo $mail;?>"/></label>
            </br>
            <label for="pagina">Página personal: <input type="text" name="paginaPersonal" id="pagina" value="<?php echo $paginaPersonal;?>"/></label>
            </br>
            <label for="IP">Dirección IP del equipo: <input type="text" name="ipEquipo" id="IP" value="<?php echo $direccionIP;?>"/></label>
            </br>
            <label for="hobbies">Descripcion de los hobbies: <textarea name="descripcionHobbies" id="hobbies" value="<?php echo $hobbies;?>"></textarea></label>
            </br>
            <label for="info">Recibir información: <input type="checkbox" name="recibirInformacion" id="info" value="<?php echo $informacion;?>"/></label>
            </br>
            <p>Sexo:
                <label for="m">Mujer<input type="radio" name="sexo" value="mujer" <?php if ($sexo=="mujer") echo "checked"?> id="m"/></label>
                <label for="h">Hombre<input type="radio" name="sexo" value="hombre" <?php if ($sexo=="hombre") echo "checked"?> id="h"/></label>
            </p>
            </br>
            <select name="idioma" size="5" multiple="multiple">
                <option <?php if (in_array("ingles", $lenguaExtranjera)){echo "selected=\"selected\"";}?>>Inglés</option>
                <option <?php if (in_array("portugues", $lenguaExtranjera)){echo "selected=\"selected\"";}?>>Portugués</option>
                <option <?php if (in_array("frances", $lenguaExtranjera)){echo "selected=\"selected\"";}?>>Francés</option>
                <option <?php if (in_array("aleman", $lenguaExtranjera)){echo "selected=\"selected\"";}?>>Alemán</option>
                <option <?php if (in_array("informacion", $lenguaExtranjera)){echo "selected=\"selected\"";}?>>Italiano</option>
            </select>
            </br>
            <label for="CV">Currículo: <input type="file" name="curriculum" id="CV"/></label></br>
            <p><input type="reset" value="Borrar"/> <input type="submit" value="Enviar" /></p>
        </form>
<?php
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title></title>
    </head>
    <body>

        <?php
        function mostrarValores($nombre, $usuario, $contrasenha, $edad, $fechaNacimiento, $mail, $paginaPersonal, $direccionIP, $hobbies, $informacion,
                        $sexo, $lenguaExtranjera, $archivo){
            echo "<p>Formulario cubierto correctamente. Los datos recibidos son:</p>";        
            echo "<p>Nombre: ".$_POST[$nombre]."</p>";
            echo "<p>Nombre de usuario: ".$_POST[$usuario]."</p>";
            echo "<p>Contraseña: ".$_POST[$contrasenha]."</p>";
            echo "<p>Edad: ".$_POST[$edad]."</p>";
            echo "<p>Fecha de nacimiento: ".$_POST[$fechaNacimiento]."</p>";
            echo "<p>Email: ".$_POST[$mail]."</p>";
            echo "<p>Página personal: ".$_POST[$paginaPersonal]."</p>";
            echo "<p>Dirección IP: ".$_POST[$direccionIP]."</p>";
            echo "<p>Hobbies: ".$_POST[$hobbies]."</p>";
            echo "<p>Información: ".$_POST[$informacion]."</p>";
            echo "<p>Sexo: ".$_POST[$sexo]."</p>";
            echo "<p>Lengua Extranjera: ".$_POST[$lenguaExtranjera]."</p>";
            echo "<p><strong>Curriculum vitae:</strong> " . (!empty($archivo['name']) ? $archivo['name'] : "No se subió ningún archivo") . "</p>";
           
            echo '<h3>Información del Servidor:</h3>';
            echo 'PHP_SELF: ' . $_SERVER['PHP_SELF'] . '<br>';
            echo 'SERVER_NAME: ' . $_SERVER['SERVER_NAME'] . '<br>';
            echo 'HTTP_USER_AGENT: ' . $_SERVER['HTTP_USER_AGENT'] . '<br>';
            echo 'REMOTE_ADDR: ' . $_SERVER['REMOTE_ADDR'] . '<br>';
            echo 'REQUEST_METHOD: ' . $_SERVER['REQUEST_METHOD'] . '<br>';
        }

    if (count($_POST)==0){
        incForm("", "", "", "", "", "", "", "", "", "", "", array());
    }else{
        $cadenaError="";
        $nombre= htmlspecialchars(trim(strip_tags($_POST["nombre"])), ENT_QUOTES, "ISO-8859-1");
        $usuario= htmlspecialchars(trim(strip_tags($_POST["usuario"])), ENT_QUOTES, "ISO-8859-1");
        $contrasenha= htmlspecialchars(trim(strip_tags($_POST["urlFab"])), ENT_QUOTES, "ISO-8859-1");
        if ($contrasenha == ""){
            $cadenaError.= "El campo contraseña no puede ser vacío";
        }
        $edad= htmlspecialchars(trim(strip_tags($_POST["edad"])), ENT_QUOTES, "ISO-8859-1");
        $fechaNacimiento= htmlspecialchars(trim(strip_tags($_POST["fechaNacimiento"])), ENT_QUOTES, "ISO-8859-1");
        $mail= htmlspecialchars(trim(strip_tags($_POST["mail"])), ENT_QUOTES, "ISO-8859-1");
        $paginaPersonal= htmlspecialchars(trim(strip_tags($_POST["paginaPersonal"])), ENT_QUOTES, "ISO-8859-1");
        $direccionIP= htmlspecialchars(trim(strip_tags($_POST["direccionIP"])), ENT_QUOTES, "ISO-8859-1");
        $hobbies= htmlspecialchars(trim(strip_tags($_POST["hobbies"])), ENT_QUOTES, "ISO-8859-1");
        $informacion= htmlspecialchars(trim(strip_tags($_POST["informacion"])), ENT_QUOTES, "ISO-8859-1");
        $sexo= htmlspecialchars(trim(strip_tags($_POST["sexo"])), ENT_QUOTES, "ISO-8859-1");
        $lenguaExtranjera= htmlspecialchars(trim(strip_tags($_POST["mail"])), ENT_QUOTES, "ISO-8859-1");      

        if ($cadenaError != ""){
            incForm($nombre, $usuario, $contrasenha, $edad, $fechaNacimiento, $mail, $paginaPersonal, $direccionIP, $hobbies, $informacion,
                        $sexo, $lenguaExtranjera);
            echo "<strong><em>$cadenaError</em></strong>";
        }else{
            mostrarValores($nombre, $usuario, $contrasenha, $edad, $fechaNacimiento, $mail, $paginaPersonal, $direccionIP, $hobbies, $informacion,
                        $sexo, $lenguaExtranjera);
        }
           
            if(mb_strlen($contrasenha) < 6){
                echo "*La contraseña introducida no es válida";
            }

            if (ctype_digit($edad)){
                if($edad <0 && $edad>130){
                echo "*Introduzca una edad válida";
            }
            }else{
                echo "El tipo de dato introducido no es válido";
            }

            if($fechaNacimiento!=""){
                $dataArray=explode("/", $fechaNacimiento);
                    if (count($dataArray)==3){
                        if(checkdate($dataArray[1], $dataArray[0], $dataArray[2])){
                            echo "Se escribio la fecha";
                        }else{
                            echo "Alguno de los valores introducidos no es correcto";
                        }
                    }else{
                        echo "Introduzca una fecha con formato válido";
                    }
            }else{
                echo "No se ha rellenado el campo fecha";
            }
           
            if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
                echo "Por favor, introduzca una dirección de email válida";
            }

            if(!filter_var($paginaPersonal, FILTER_VALIDATE_URL)){
                echo "Por favor, introduzca una url válida";
            }

            if(!filter_var($direccionIP, FILTER_VALIDATE_IP)){
                echo "Por favor, introduzca una IP válida";
            }
           
        if (empty($errores)) {
        // Si no hay errores, se muestran los valores
            mostrarValores($nombre, $usuario, $contrasenha, $edad, $fechaNacimiento, $mail, $paginaPersonal, $direccionIP, $hobbies, $informacion,
                        $sexo, $lenguaExtranjera);
            } else {
        // Si hay errores, mostramos el formulario con los valores introducidos
                echo "<strong>Errores:</strong><br>" . $cadenaError;
                incForm($nombre, $usuario, $contrasenha, $edad, $fechaNacimiento, $mail, $paginaPersonal, $direccionIP, $hobbies, $informacion,
                        $sexo, $lenguaExtranjera, $archivo);
            }
        }
?>      
    </body>
</html>