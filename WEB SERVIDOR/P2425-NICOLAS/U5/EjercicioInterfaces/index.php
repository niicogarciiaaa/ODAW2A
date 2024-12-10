<?php
include_once 'mensaje.php';
$mens1 = new Mensaje("Miércoles");
$mens1->Saludar();

echo "<br/>";
$mens1->Despedirse();
?>