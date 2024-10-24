 <?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
$nombre=$_POST["nombreCompleto"];
$usuario=$_POST["nombreUsuario"];
$contraseña=$_POST["Contrasenha"];
$edad=$_POST["edad"];
$fechanac=$_POST["FechaNacimiento"];
$email=$_POST["email"];
$URL=$_POST["URL"];
$IP=$_POST["IP"];
$DescripcionHobbies=$_POST["Descripcion"];


if (isset($_POST["RecibirInfo"])){
    
    $textoRecibirInfo='Quiere recibir informacion';
}else{
    $textoRecibirInfo="no desea recibir informacion";
}
if (isset($_POST['sexo'])) {
    $sexo = $_POST['sexo'];
    
}
if (isset($_POST['Idiomas'])) {
    $idiomasele = $_POST['Idiomas'];
    
}

move_uploaded_file($_FILES["archivo1"]["tmp_name"], "subidos/".$_FILES["archivo1"]["name"]);
     
echo 'Nombre Completo: '.$nombre;
echo '<br/>Nombre Usuario: '.$usuario;
echo '<br/>Contraseña: '.$contraseña;
echo '<br/>Edad: '.$edad;
echo '<br/>Fecha de Nacimiento: '.$fechanac;
echo '<br/>E-Mail: '.$email;
echo '<br/>URL: '.$URL;
echo '<br/>IP: '.$IP;
echo '<br/>Descripción de los hobbies: '.$DescripcionHobbies;
echo '<br/>Desea recibir información: '.$textoRecibirInfo;
echo '<br/>Sexo: '.$sexo;
echo '<br/>Idioma extranjero seleccionado: '.$idiomasele;
echo '<br/>Nombre del fichero: '.$_FILES["archivo1"]["name"]." y el tamaño es: ".$_FILES["archivo1"]["size"];
     
?>