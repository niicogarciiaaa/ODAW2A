<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if($_FILES["archivo1"]['size']<=(2*1024*1024)){
     move_uploaded_file($_FILES["archivo1"]["tmp_name"], "subidos/".$_FILES["archivo1"]["name"]);
     echo 'archivo movido correctamente';
}else{
    echo 'Excede el tamaño maximo';
}
?>