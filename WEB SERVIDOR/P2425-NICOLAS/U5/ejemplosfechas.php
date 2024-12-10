<?php

echo "<br/>".date("d-m-Y H:i:s");
echo "<br/>".date("d-m-Y H:i:s",time()+3600*10);
echo "<br/>".date("d-m-Y h:i:s",time()+3600*10);

echo "<br/>".date("D/M/Y");
echo "<br/>".date("d/m/Y",3600*24*12);
echo "<br/>".date("d/m/Y",1);
echo "<br/>".date("d/m/Y H:i:s",1);


echo "<br/>".strtotime("20-11-2024");
echo "<br/>".date("d/m/Y",strtotime(20-11-2024));

echo "<br/>".date("Y",strtotime(20-11-2024));
echo "<br/>".strtotime(11/01/2024);
echo "<br/>".date("d/m/y",strtotime("11-01-2024"));
echo "<br/>".strtotime("+1 day");

echo"<br/>".date("d/m/y",strtotime("+1 day"));

echo"<br/>".date("d/m/y",strtotime("+1 week"));

echo"<br/>".date("d/m/y",strtotime("last monday"));


//Diferencias entre fechas

$date1= new DateTime("2009-10-11");
$date2 = new DateTime("2008-11-01");

$tiempo= $date1->diff($date2);

echo $tiempo->format('Y-m-d');
echo "<br/>";

echo $tiempo-> y." años ".$tiempo-> d." dias ";
echo "<br/>".$tiempo-> format("%y años %m meses %d días");


//Estilos procedimentos
$date1= date_create("2009-09-11");
$date2= date_create("2008-11-01");

$tiempo= date_diff($date1,$date2);

echo "<pre>";
print_r(localtime());

print_r(localtime(time(),true));


echo "</pre>"

?>
