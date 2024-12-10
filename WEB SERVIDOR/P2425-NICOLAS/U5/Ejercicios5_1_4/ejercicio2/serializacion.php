<?php
include_once 'circulo.php';
include_once 'cuadrado.php';

echo "<pre>";

session_start();
$c1 =new Circulo(3);

print_r($_SESSION);
$_SESSION["circulo1"]= $c1;

print_r($_SESSION);

$recuperado= $_SESSION["circulo1"];
$recuperado->MostrarArea();
echo "</pre>";
echo serialize($c1);

$objetoserializado = serialize($c1);
echo "<br>";
$recuperado = unserialize($objetoserializado);
echo $recuperado->MostrarArea();
echo "<br>";
$recuperado->MostrarPerimetro();

echo "<br/>";

$num = 41.5;
$numSerializado= serialize($num);
$recuperado2 = unserialize($numSerializado);


echo var_dump($recuperado2);










?>

