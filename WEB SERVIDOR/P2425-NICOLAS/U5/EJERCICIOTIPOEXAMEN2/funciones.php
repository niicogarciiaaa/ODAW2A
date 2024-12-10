<?php
include_once 'datos.php';

function filtrarCursos($curso, $nombre, $horas_min, $fecha_inicio) {
   
   if ($nombre && stripos($curso['nombre'], $nombre) === false) {
       return false; 
   }
   
   if ($horas_min && $curso['horas'] < $horas_min) {
       return false; 
   }
   
   if ($fecha_inicio && strtotime($curso['fecha_inicio']) < strtotime($fecha_inicio)) {
       return false; 
   }
   return true;
}

// 
// 
//if (($nombre == "" || stripos($curso['nombre'], $nombre) !== false) &&($horas_min == "" || $curso['horas'] >= $horas_min) &&($fecha_inicio == "" || $curso['fecha_inicio'] >= $fecha_inicio)) {//  return true}
// 
// 
