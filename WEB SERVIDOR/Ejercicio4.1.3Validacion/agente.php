 <?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
$nombre= trim(strip_tags($_POST["nombreCompleto"]));
$usuario= trim(strip_tags($_POST["nombreUsuario"]));
$contraseña = trim(strip_tags($_POST["Contrasenha"]));
$edad = trim(strip_tags($_POST["edad"]));
$fechanac = trim(strip_tags($_POST["FechaNacimiento"]));
$email = trim(strip_tags($_POST["email"]));
$URL = trim(strip_tags($_POST["URL"]));
$IP = trim(strip_tags($_POST["IP"]));
$DescripcionHobbies = trim(strip_tags($_POST["Descripcion"]));


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
echo '<br/>Nombre del fichero: '.$_FILES["archivo1"]["name"]." y el tamaño es: ".$_FILES["archivo1"]["size"]."<br/>";
if(mb_strlen($contraseña)<6){
    echo "La contraseña no cumple con los requisitos de tamaño<br/>";
}
if(ctype_digit($edad)){
    if($edad<0 && $edad>130){
        echo 'El numero no está entre 0 y 130';
    
    }
}else{
    echo 'No introduciste un numero<br/>';
    
}
 $dataArray=explode("/",$fechanac);
 if (count($dataArray)==3){
 if(checkdate($dataArray[1],$dataArray[0], $dataArray[2]));

}else{
        echo 'No contiene el formato dd/mm/aaaa<br/>';
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'No es un formato correcto de EMAIL<br/>';
    }

 if (!filter_var($URL, FILTER_VALIDATE_URL)){
        echo 'No es un formato correcto de URL<br/>';
    }
 if (!filter_var($IP, FILTER_VALIDATE_IP)){
        echo 'No es un formato correcto de IP<br/>';
    }
?>