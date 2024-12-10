<?php
function division($dividendo, $divisor) {
 try {
 if ($divisor == 0) {
 throw new Exception('Non se pode dividir por 0');
 }
 else return $dividendo/$divisor;
 } catch (Exception $e) {
 echo 'Excepción capturada: ', $e->getMessage(), "\n";
 }
}

function divisionNoExcepcion($dividendo, $divisor){
    return $dividendo/$divisor;
}

try{
echo division(10,5);
}catch(Exception $e){
    echo "Excepcion:".$e->getmessage()."<br/>";
}finally{
    echo "<br/>Adios";
}

function suma($datos){
    $respuesta=0;
    for ($i = 0; $i < count($datos); $i++) {
        if($datos[$i]<0){
            throw new Exception($datos[$i]."es negativo");
        }else{
            echo "<br>sumando<br>";
            $respuesta = $respuesta+$datos[$i];
        }
    }
    return $respuesta;
}
$datos=array(1,-10,4,5,-6,5,-5);

try{
    echo suma($datos);

}catch(Exception $e){
    echo "Excepcion:".$e->getmessage();
}

?>