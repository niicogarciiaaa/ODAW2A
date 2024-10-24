let esHoraEnPunto = true;

    for (let  hora=9; hora <= 21;){
        if(esHoraEnPunto==true){
            document.write("Es la hora"+hora+":00<br>")
            esHoraEnPunto=false;
        }else{
        document.write("Es la hora"+hora+":30<br><br>")
        esHoraEnPunto=true
        hora++;
        }

}
