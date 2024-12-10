<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre"/>
        <br/>
        <label for="correo">Correo Electrónico</label>
        <input type="text" id="correo" name="correo"/>
        <br/>
        <label for="edad">Edad</label>
        <input type="text" id="edad" name="edad">
        <br/>
        <label for="colores">Color Favorito</label>
        <select id="colores" name="colores[]" multiple>
            <option value="rojo">Rojo</option>
            <option value="azul">Azul</option>
            <option value="verde">Verde</option>
            <option value="amarillo">Amarillo</option>
        </select>
        <br>
        <label for="comentarios">Comentarios</label>
        <textarea id="comentarios" name="comentarios"></textarea>
        <br>
        <input type="submit" value="Enviar">
    </form>


    <?php
$nombre = $_POST["nombre"]?? "";
$correo = $_POST["correo"]?? "";
$edad = $_POST["edad"]?? "";
$selected_arr = $_POST['colores']?? [];
$comentarios = $_POST['comentarios'] ?? "";
$coloresSerializados = serialize($selected_arr);

print_r($_REQUEST);
echo "<hr>";
echo "EL nombre es: ".$nombre." con correo electrónico ".$correo ." con edad: ".$edad." sus colores favoritos son: ".sabercolores($selected_arr)." y sus comentarios son: ".$comentarios;



 function sabercolores($array){

$color="";
$coloreselecionados="";
//for ($i=0; $i<$n; $i++)
   //print ("$idiomas[$i]<br>\n");
   foreach ($array as $color) {
     $coloreselecionados.= ("$color<br>\n");
   }
   return $coloreselecionados;
  }



  
  setcookie('nombre',$nombre,time()+(3600*7*24));
  setcookie('correo',$correo,time()+(3600*7*24));
  setcookie('edad',$edad,time()+(3600*7*24));
  setcookie('colores',$coloresSerializados,time()+(3600*7*24));
  setcookie('comentarios',$comentarios,time()+(3600*7*24));

  echo "<h1>Texto con las variables de la cookie</h1>";
  if (isset($_COOKIE['nombre']) && isset($_COOKIE['correo']) && isset($_COOKIE['edad']) && isset($_COOKIE['colores']) && isset($_COOKIE['comentarios'])) {
    $nombrecookie = $_COOKIE['nombre'];
    $correocookie = $_COOKIE['correo'];
    $edadcookie = $_COOKIE['edad'];
    $colorescookie = unserialize($_COOKIE['colores']);  // Deserializar los colores
    $comentarioscookie = $_COOKIE['comentarios'];

    echo "Nombre: $nombrecookie <br>";
    echo "Correo: $correocookie <br>";
    echo "Edad: $edadcookie <br>";
    echo "Colores favoritos: <br>";
    echo implode("<br>", $colorescookie);  // Mostrar los colores favoritos
    echo "<br>Comentarios: $comentarioscookie <br>";
} else {
    echo "No hay cookies guardadas.";
}





?>

</body>
</html>
