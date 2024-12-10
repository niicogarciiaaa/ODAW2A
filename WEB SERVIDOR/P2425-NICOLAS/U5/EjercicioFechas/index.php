<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
 <title></title>
 </head>
 <body>
 <!-- Fechas -->
 <form method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
 <br><br>
 OPCIÓN 1 - Fecha Campo texto:
 <input type="text" name="fecha" value="" placeholder="dd-mm-yyyy"> (validamos con explode y
checkdate)
 <br><br>
 OPCIÓN 2 - Fecha Campo texto:
 <input type="text" name="fechaPreg" value="" placeholder="dd-mm-yyyy"> (validamos con expresión
regular)
 <br><br>
 OPCIÓN 3 - Fecha HTML5:
 <input type="date" name="fecha5" value="">
 <br><br>
 <input type="submit" name="enviar" value="Enviar">
 </form>
 <?php
//VALIDACIÓN DE FECHAS CON EXPLODE Y CHECKDATE
if (isset($_REQUEST['enviar'])) {
 echo "<pre>Request<br>";
 print_r($_REQUEST);
 echo "</pre>Request<br>";
 //OPCIÓN 1: La fecha es un string, el usuario puede introducir cualquier valor debemos de validar
 $fecha = htmlspecialchars(trim(strip_tags($_REQUEST["fecha"])), ENT_QUOTES, "ISO-8859-1");
 if ($fecha=="") {
 echo "<br>OP1: La fecha es obligatoria.";
 } else {//Comprobamos formato
 //explode y checkdate
 $afecha = explode("-", $fecha);
 //Tiene que tener exactamente 3 elementos y ser una fecha existente - checkdate(m,d,y)
 if (!((count($afecha) == 3) && checkdate($afecha[1], $afecha[0], $afecha[2]))) {
 $fecha = "NO VALIDA";
 }
 echo '<br>OP1: La fecha es: ' . $fecha;
 }
 //OPCIÓN 2: La fecha es un string, el usuario puede introducir cualquier valor debemos de validar
 $fechaPreg = htmlspecialchars(trim(strip_tags($_REQUEST["fechaPreg"])), ENT_QUOTES, "ISO-8859-1");
 if (empty($fechaPreg)) {
 echo "<br>OP2: La fecha es obligatoria.";
 } else {//Comprobamos formato
 //Podemos comprobar si el formato es válido, pero igualmente hay que verificar que sea una fecha
//existente
 if (!preg_match('/^\d{2}-\d{2}-\d{4}$/', $fechaPreg)) {
 $fechaPreg = "NO VALIDA";
 } else {
 $afecha = explode("-", $fechaPreg);
 //No necesitamos comprobar el número de elementos porque ya sabemos que cumple el formato,
 //nos queda comporbar que sea una fecha existente.
 if (! checkdate($afecha[1], $afecha[0], $afecha[2])) {
 $fecha = "NO VALIDA";
 }
 }
 echo '<br>OP2: La fecha es: ' . $fechaPreg;
 } // CONCLUSIÓN: preg_match para las fechas NO ES SUFICIENTE.

 //OPCIÓN 3: La fecha es un string en formato yyyy-mm-dd, igualmente tenemos que verificar que sea
//correcta.
$fecha5 = htmlspecialchars(trim(strip_tags($_REQUEST["fecha5"])), ENT_QUOTES, "ISO-8859-1");
$fechaexpl= explode("-",$fecha5);
if (!((count($fechaexpl) == 3) && checkdate($fechaexpl[1], $fechaexpl[0], $fechaexpl[2]))) {
    $fecha = "NO VALIDA";
    }
    echo '<br>OP1: La fecha es: ' . $fecha;
    
 //Cualquiera de las opciones anteriores es válida cambiando las posiciones del array en checkdate.
 //input=date -> y-m-d
 //checkdate(m,d,y) checkdate($afecha[1], $afecha[2], $afecha[0])
}
?>
 </body>
</html>
