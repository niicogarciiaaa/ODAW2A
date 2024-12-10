<?php



function generarIP($letra){
    if($letra=="A"){
        $prim_oct="10";
        $seg_oct= mt_rand(0,255);
        $ter_oct= mt_rand(0,255);
        $cua_oct= mt_rand(0,255);
    }elseif($letra=="B"){
        $prim_oct="172";
        $seg_oct= mt_rand(16,31);
        $ter_oct= mt_rand(0,255);
        $cua_oct= mt_rand(0,255);
    }elseif($letra=="C"){
        $prim_oct="192";
        $seg_oct= "168";
        $ter_oct= mt_rand(0,255);
        $cua_oct= mt_rand(0,255);
    } else {
        echo "Introduce una IP Valida";
    }
    return$prim_oct.'.'.$seg_oct.'.'.$ter_oct.'.'.$cua_oct;
}
?>