<?php
// Función para mostrar el formulario con valores predeterminados
function incForm($nombreCompleto , $nombreUsuario, $contrasenha, $edad , $fechaNacimiento , $email, $url, $ip, $descripcion, $recibirInfo , $sexo, $idioma) { ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <fieldset>
            <label for="NC">Nombre Completo: 
                <input type="text" name="nombreCompleto" id="NC" value="<?php echo htmlspecialchars($nombreCompleto); ?>"/>
            </label><br>

            <label for="NU">Nombre de Usuario: 
                <input type="text" name="nombreUsuario" id="NU" value="<?php echo htmlspecialchars($nombreUsuario); ?>"/>
            </label><br>

            <label for="CO">Contraseña: 
                <input type="text" name="Contrasenha" id="CO" required value="<?php echo htmlspecialchars($contrasenha); ?>"/> Mínimo 6 caracteres
            </label><br>

            <label for="Ed">Edad: 
                <input type="text" name="edad" id="Ed" value="<?php echo htmlspecialchars($edad); ?>"/>
            </label><br>

            <label for="FN">Fecha de nacimiento: 
                <input type="text" name="FechaNacimiento" id="FN" value="<?php echo htmlspecialchars($fechaNacimiento); ?>"/>
            </label><br>

            <label for="Em">e-mail: 
                <input type="text" name="email" id="Em" value="<?php echo htmlspecialchars($email); ?>"/>
            </label><br>

            <label for="URL">URL: 
                <input type="text" name="URL" id="URL" value="<?php echo htmlspecialchars($url); ?>"/>
            </label><br>

            <label for="IP">IP: 
                <input type="text" name="IP" id="IP" value="<?php echo htmlspecialchars($ip); ?>"/>
            </label><br>

            <label for="DH">Descripción de los hobbies: 
                <textarea id="DH" name="Descripcion"><?php echo htmlspecialchars($descripcion); ?></textarea>
            </label><br>

            <label for="RI">
                <input type="checkbox" name="recibirInfo" id="RI" <?php if ($recibirInfo) echo "checked"; ?>/> Recibir Información
            </label><br>

            <label>Sexo:
                <label for="HO">
                    <input type="radio" name="sexo" value="hombre" id="HO" <?php if ($sexo == "hombre") echo "checked"; ?>/> Hombre
                </label>
                <label for="MU">
                    <input type="radio" name="sexo" value="mujer" id="MU" <?php if ($sexo == "mujer") echo "checked"; ?>/> Mujer
                </label>
            </label><br>

            <label for="Idiomas[]">Idioma: 
                <select name="Idiomas[]" size="5" multiple>
                    <option value="Catalan" <?php if (in_array("Catalan", $idioma)) echo "selected"; ?>>Catalan</option>
                    <option value="Italiano" <?php if (in_array("Italiano", $idioma)) echo "selected"; ?>>Italiano</option>
                    <option value="Inglés" <?php if (in_array("Inglés", $idioma)) echo "selected"; ?>>Inglés</option>
                    <option value="Francés" <?php if (in_array("Francés", $idioma)) echo "selected"; ?>>Francés</option>
                    <option value="Alemán" <?php if (in_array("Alemán", $idioma)) echo "selected"; ?>>Alemán</option>
                </select>
            </label><br>

            <label for="AR">Currículo: 
                <input type="file" name="archivo1" id="AR" required/>
            </label><br>

            <input type="submit" name="Enviar" value="Enviar"/>
        </fieldset>
        <a href="informacion.php">PINCHA AQUI</a>
    </form>        
<?php
}

// Procesamiento de POST y creación de cookies
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Limpiar y validar entradas del formulario
    $nombre = trim(strip_tags(htmlspecialchars($_POST["nombreCompleto"])));
    $usuario = trim(strip_tags(htmlspecialchars($_POST["nombreUsuario"])));
    $contraseña = trim(strip_tags(htmlspecialchars($_POST["Contrasenha"])));
    $edad = trim(strip_tags(htmlspecialchars($_POST["edad"])));
    $fechanac = trim(strip_tags(htmlspecialchars($_POST["FechaNacimiento"])));
    $email = trim(strip_tags(htmlspecialchars($_POST["email"])));
    $url = trim(strip_tags(htmlspecialchars($_POST["URL"])));
    $ip = trim(strip_tags(htmlspecialchars($_POST["IP"])));
    $descripcion = trim(strip_tags(htmlspecialchars($_POST["Descripcion"])));
    $recibirInfo = isset($_POST["recibirInfo"]);
    $sexo = isset($_POST["sexo"]) ? trim(strip_tags(htmlspecialchars($_POST["sexo"]))) : "";
    $idioma= isset($_POST["Idiomas"])?$_POST["Idiomas"]: array();
    
    $errores = "";

    // Validaciones
    if (mb_strlen($contraseña) < 6) {
        $errores .= "La contraseña no cumple con los requisitos de tamaño.<br/>";
    }

    if (!ctype_digit($edad) || $edad < 0 || $edad > 130) {
        $errores .= 'La edad debe estar entre 0 y 130 años.<br/>';
    }

    $dataArray = explode("/", $fechanac);
    if (count($dataArray) != 3 || !checkdate($dataArray[1], $dataArray[0], $dataArray[2])) {
        $errores .= 'La fecha de nacimiento no es válida. Formato correcto: dd/mm/aaaa.<br/>';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores .= 'El email no es válido.<br/>';
    }

    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        $errores .= 'El URL no es válido.<br/>';
    }

    if (!filter_var($ip, FILTER_VALIDATE_IP)) {
        $errores .= 'La IP no es válida.<br/>';
    }

    // Si no hay errores, se crean las cookies
    if (empty($errores)) {
        crearCookies($nombre, $usuario, $contraseña, $edad, $fechanac, $email, $url, $ip, $descripcion, $recibirInfo, $sexo);
        
    } else {
        echo $errores;
        incForm($nombre, $usuario, $contraseña, $edad, $fechanac, $email, $url, $ip, $descripcion, $recibirInfo, $sexo);
    }
} else {
    // Mostrar el formulario vacío si no hay envío
    incForm("","","","","","","","","","","",array());
}

// Función para crear cookies
function crearCookies($nombre, $usuario, $contraseña, $edad, $fechanac, $email, $url, $ip, $descripcion, $recibirInfo, $sexo) {
    setcookie("CNombre", $nombre, time() + 3600 * 24 * 30);
    setcookie("CUsuario", $usuario, time() + 3600 * 24 * 30);
    setcookie("CContrasenha",$contraseña, time() + 3600 * 24 * 30); 
    setcookie("Cedad", $edad, time() + 3600 * 24 * 30);
    setcookie("Cfechanac", $fechanac, time() + 3600 * 24 * 30);
    setcookie("Cemail", $email, time() + 3600 * 24 * 30);
    setcookie("Curl", $url, time() + 3600 * 24 * 30);
    setcookie("Cip", $ip, time() + 3600 * 24 * 30);
    setcookie("Cdescripcion", $descripcion, time() + 3600 * 24 * 30);
    setcookie("CrecibirInfo", $recibirInfo ? '1' : '0', time() + 3600 * 24 * 30);
    setcookie("Csexo", $sexo, time() + 3600 * 24 * 30);
    
    
    for ($i=0; $i<count($_POST["Idiomas"]); $i++){
        setcookie("Idiomas[$i]",$_POST["Idiomas"][$i],time() + 3600 *24 *30);
    }
 }
 
    
 
 print_r($_COOKIE)



?>
