<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if($_FILES["archivo1"]['type']=="application/pdf"){
     move_uploaded_file($_FILES["arquivo1"]["tmp_name"], "pdf/".$_FILES["arquivo1"]["name"]);
     echo 'archivo movido correctamente';
}elseif ($_FILES["archivo1"]['type'] == "image/jpeg" ||$_FILES["archivo1"]['type'] == "image/png" ||$_FILES["archivo1"]['type'] == "image/bmp"){
    move_uploaded_file($_FILES["arquivo1"]["tmp_name"], "img/".$_FILES["arquivo1"]["name"]);
     echo 'archivo movido correctamente';
}else{
    echo 'Tipo de archivo incorrecto';
}
?>