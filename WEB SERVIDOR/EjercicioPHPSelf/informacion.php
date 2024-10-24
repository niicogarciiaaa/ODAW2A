<?php

echo "<h2>Datos recibidos del formulario:</h2>";

// Inicializar variables
$nombre = $nombreUsuario = $contrasenha = $edad = $fechaNacimiento = "";
$email = $url = $ip = $descripcion = $recibirInfo = $sexo = "";
$idioma="";

// Recuperar datos de las cookies
if (isset($_COOKIE["CNombre"])) {
    $nombre = $_COOKIE["CNombre"];
}
if (isset($_COOKIE["CUsuario"])) {
    $nombreUsuario = htmlspecialchars($_COOKIE["CUsuario"]);
}
if (isset($_COOKIE["CContrasenha"])) {
    $contrasenha = htmlspecialchars($_COOKIE["CContrasenha"]);
}
if (isset($_COOKIE["Cedad"])) {
    $edad = htmlspecialchars($_COOKIE["Cedad"]);
}
if (isset($_COOKIE["Cfechanac"])) {
    $fechaNacimiento = htmlspecialchars($_COOKIE["Cfechanac"]);
}
if (isset($_COOKIE["Cemail"])) {
    $email = htmlspecialchars($_COOKIE["Cemail"]);
}
if (isset($_COOKIE["Curl"])) {
    $url = htmlspecialchars($_COOKIE["Curl"]);
}
if (isset($_COOKIE["Cip"])) {
    $ip = htmlspecialchars($_COOKIE["Cip"]);
}
if (isset($_COOKIE["Cdescripcion"])) {
    $descripcion = htmlspecialchars($_COOKIE["Cdescripcion"]);
}
if (isset($_COOKIE["CrecibirInfo"])) {
    $recibirInfo = $_COOKIE["CrecibirInfo"] === '1'; // Convertir a boolean
}
if (isset($_COOKIE["Csexo"])) {
    $sexo = htmlspecialchars($_COOKIE["Csexo"]);
}
if (isset($_COOKIE["Csexo"])) {
    $sexo = htmlspecialchars($_COOKIE["Csexo"]);
}
if (isset($_COOKIE["Idiomas"])) {
    for ($i = 0; $i < count($_COOKIE["Idiomas"]); $i++) {
        // Concatenar cada idioma a la cadena
        $idioma .= htmlspecialchars($_COOKIE["Idiomas"][$i]) . ",";    
    }
    $idioma=rtrim($idioma,",");
}


// Mostrar los datos
echo "<p><strong>Nombre Completo:</strong> $nombre</p>";
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
// Si necesitas mostrar el idioma, asegúrate de recuperarlo adecuadamente como se explicó antes.
 echo "<p><strong>Idioma seleccionado:</strong> $idioma</p>";

echo "<h2>Datos del servidor:</h2>";
echo '<strong>PHP_SELF</strong>: ' . htmlspecialchars($_SERVER['PHP_SELF']) . '<br/>';
echo '<strong>SERVER_NAME</strong>: ' . htmlspecialchars($_SERVER['SERVER_NAME']) . '<br/>';
echo '<strong>HTTP_HOST</strong>: ' . htmlspecialchars($_SERVER['HTTP_HOST']) . '<br/>';
echo '<strong>HTTP_REFERER</strong>: ' . (isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : "No disponible") . '<br/>';
echo '<strong>HTTP_USER_AGENT</strong>: ' . htmlspecialchars($_SERVER['HTTP_USER_AGENT']) . '<br/>';
echo '<strong>SCRIPT_NAME</strong>: ' . htmlspecialchars($_SERVER['SCRIPT_NAME']) . '<br/>';
?>
