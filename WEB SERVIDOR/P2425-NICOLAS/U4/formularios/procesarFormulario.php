<html lang="es">

<head>
   <title>Controles de entrada. Resultados del formulario</title>
</head>

<body>

<h1>Elementos de entrada. Resultados del formulario</h1>

<h2>Elementos  de tipo INPUT</h2>

<h3>TEXT</h3>
<?php
   //print ($cadena);
   print ($_REQUEST ['cadena']);
?>
<hr>

<h3>RADIO</h3>
<?php
   //print ($sexo);
   print ($_REQUEST ['sexo']);
?>
<hr>

<h3>CHECKBOX</h3>
<?php

   $checked_arr = $_REQUEST['extras'];
   $nCheck = count($checked_arr);
   echo "Hay ".$nCheck." checkboxe(s) marcados.<br>\n";
   $extra="";
   
   //for ($i=0; $i<$n; $i++)
      //print ("$extras[$i]<br>\n");
      foreach ($_REQUEST['extras'] as $extra) {
        print ("$extra<br>\n");
      }
?>
<hr>

<h3>FILE</h3>
(Veremos en otro ejemplo como tratar la subida de ficheros)
<hr>

<h3>HIDDEN</h3>
<?php
   //print ($username);
   print ($_REQUEST ['username']);
?>
<hr>

<h3>PASSWORD</h3>
<?php
   //print ($clave);
   print ($_REQUEST ['clave']);
?>
<hr>

<h3>SUBMIT</h3>
<?php
   //if ($enviar)
      //print ("Se ha pulsado el botón de enviar");
      if ($_REQUEST ['enviar']) {
        print ("Se ha pulsado el botón de enviar");
      }
?>
<hr>

<h2>Elemento SELECT</h2>

<h3>SELECT SIMPLE</h3>
<?php
   //print ($color);
   print ($_REQUEST ['color']);
?>
<hr>

<h3>SELECT MULTIPLE</h3>
<?php
   
   $selected_arr = $_REQUEST['idiomas'];
   $nSelect = count($selected_arr);
   echo "Hay ".$nSelect." opciones seleccionadas.<br>\n";
   $idioma="";
   
   //for ($i=0; $i<$n; $i++)
      //print ("$idiomas[$i]<br>\n");
      foreach ($selected_arr as $idioma) {
        print ("$idioma<br>\n");
      }
?>
<hr>

<h2>Elemento TEXTAREA</h2>
<?php
   //print ($comentario);
   print ($_REQUEST ['comentario']);
?>

<h2>Visualizar el array completo $_REQUEST</h2>

<?php
  echo "<pre>";
  print_r($_REQUEST);
  echo "</pre>";
?>
<h2>Visualizar el array completo $_POST</h2>

<?php
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
?>

<h2>Visualizar el array completo $_GET</h2>

<?php
  echo "<pre>";
  print_r($_GET);
  echo "</pre>";
?>
</body>
</html>

