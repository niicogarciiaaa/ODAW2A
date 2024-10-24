<?php 
function incForm($nombreCompleto, $nombreUsuario, $contrasenha, $edad, $fechaNacimiento, $email, $url, $ip, $descripcion, $recibirInfo, $sexo, $idioma) { ?>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
        <fieldset>
            <label for="NC">Nombre Completo: 
                <input type="text" name="nombreCompleto" id="NC" value="<?php echo htmlspecialchars($nombreCompleto); ?>"/>
            </label><br>

            <label for="NU">Nombre de Usuario: 
                <input type="text" name="nombreUsuario" id="NU" value="<?php echo htmlspecialchars($nombreUsuario); ?>"/>
            </label><br>

            <label for="CO">Contraseña: 
                <input type="password" name="Contrasenha" id="CO" required value="<?php echo htmlspecialchars($contrasenha); ?>"/> Mínimo 6 caracteres
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

            <label for="LEA[]">Idioma: 
                <select name="Idiomas" size="5" multiple="">
                    <option value="Catalan" <?php if ($idioma == "Catalan") echo "selected"; ?>>Catalan</option>
                    <option value="Italiano" <?php if ($idioma == "Italiano") echo "selected"; ?>>Italiano</option>
                    <option value="Inglés" <?php if ($idioma == "Inglés") echo "selected"; ?>>Inglés</option>
                    <option value="Francés" <?php if ($idioma == "Francés") echo "selected"; ?>>Francés</option>
                    <option value="Alemán" <?php if ($idioma == "Alemán") echo "selected"; ?>>Alemán</option>
                </select>
            </label><br>

            <label for="AR">Currículo: 
                <input type="file" name="archivo1" id="AR" required/>
            </label><br>

            <input type="submit" name="Enviar" value="Enviar"/>
        </fieldset>
    </form>        
<?php        
}

function mostrarValores($nombreCompleto, $nombreUsuario, $contrasenha, $edad, $fechaNacimiento, $email, $url, $ip, $descripcion, $recibirInfo, $sexo, $idioma, $archivo) {
    echo "<h2>Datos recibidos del formulario:</h2>";
    echo "<p><strong>Nombre Completo:</strong> $nombreCompleto</p>";
    echo "<p><strong>Nombre de Usuario:</strong> $nombreUsuario</p>";
    echo "<p><strong>Contraseña:</strong> $contrasenha</p>";
    echo "<p><strong>Edad:</strong> $edad</p>";
    echo "<p><strong>Fecha de nacimiento:</strong> $fechaNacimiento</p>";
    echo "<p><strong>e-mail:</strong> $email</p>";
    echo "<p><strong>URL:</strong> $url</p>";
    echo "<p><strong>IP:</strong> $ip</p>";
    echo "<p><strong>Descripción de los hobbies:</strong> $descripcion</p>";
    echo "<p><strong>Recibir Información:</strong> " . ($recibirInfo ? "Sí" : "No") . "</p>";
    echo "<p><strong>Sexo:</strong> $sexo</p>";
    echo "<p><strong>Idioma seleccionado:</strong> $idioma</p>";
    echo "<p><strong>Archivo subido:</strong> " . (!empty($archivo['name']) ? $archivo['name'] : "No se subió ningún archivo") . "</p>";

    
    echo "<h2>Datos del servidor:</h2>";
    echo '<strong>PHP_SELF</strong>: '.$_SERVER['PHP_SELF'].'<br/>';
    echo '<strong>SERVER_NAME</strong>: '.$_SERVER['SERVER_NAME'].'<br/>';
    echo '<strong>HTTP_HOST</strong>: '.$_SERVER['HTTP_HOST'].'<br/>';
    echo '<strong>HTTP_REFERER</strong>: '.$_SERVER['HTTP_REFERER'].'<br/>';
    echo '<strong>HTTP_USER_AGENT</strong>'.$_SERVER['HTTP_USER_AGENT'].'<br/>';
    echo '<strong>SCRIPT_NAME</strong>'.$_SERVER['SCRIPT_NAME'].'<br/>';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
    $sexo = trim(strip_tags(htmlspecialchars($_POST["sexo"])));
    $idioma = trim(strip_tags(htmlspecialchars($_POST["Idiomas"])));
    $archivo = $_FILES["archivo1"];
    
    $errores = "";

    // Validación de la contraseña
    if (mb_strlen($contraseña) < 6) {
        $errores .= "La contraseña no cumple con los requisitos de tamaño.<br/>";
    }

    // Validación de la edad
    if (!ctype_digit($edad) || $edad < 0 || $edad > 130) {
        $errores .= 'La edad debe estar entre 0 y 130 años.<br/>';
    }

    // Validación de la fecha de nacimiento
    $dataArray = explode("/", $fechanac);
    if (count($dataArray) != 3 || !checkdate($dataArray[1], $dataArray[0], $dataArray[2])) {
        $errores .= 'La fecha de nacimiento no es válida. Formato correcto: dd/mm/aaaa.<br/>';
    }

    // Validación del email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores .= 'El email no es válido.<br/>';
    }

    // Validación del URL
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        $errores .= 'El URL no es válido.<br/>';
    }

    // Validación de la IP
    if (!filter_var($ip, FILTER_VALIDATE_IP)) {
        $errores .= 'La IP no es válida.<br/>';
    }

    // Mostrar errores o datos
    if (empty($errores)) {
        
    } else {
        
        incForm($nombre, $usuario, $contraseña, $edad, $fechanac, $email, $url, $ip, $descripcion, $recibirInfo, $sexo, $idioma);
        echo "<strong>Errores:</strong><br>" . $errores;
    }
} else {
    incForm("", "", "", "", "", "", "", "", "","", "", );
    
}



?>
