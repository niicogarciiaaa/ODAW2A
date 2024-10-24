function ComprobarOrdenador(){
    let nombre=document.getElementById("nombre").value; //Obtenemos el valor del html
   
    if(nombre.substring(0,3)=="DOC"
    && (nombre.charAt(nombre.length-1)=="A"
    || nombre.charAt(nombre.length-1)=="B"
    ||nombre.charAt(nombre.length-1)=="C")){ 
        let numero=parseInt(nombre.substring(3,nombre.length-1)); //Debido a que las XXX son enteros, partimos la cadena en su posicion y la pasamos a números para así poder comprobar si esta entre 0 y 255
        if (numero<=255 && numero>=0)
            document.getElementById("resultado").innerHTML=comprobadorLetra(nombre)+numero; //Aqui llamamos a la funcion comprobadorLetra y le sumamos el número del medio para que lo exponga en el html
        else ocument.getElementById("resultado").innerHTML="Nombre introducido no válido";
    }
    else if(nombre.substring(0,4)=="025P"
         && (nombre.charAt(nombre.length-1)=="A" 
         || nombre.charAt(nombre.length-1)=="B" ||
         nombre.charAt(nombre.length-1)=="C") ){
        let numero=parseInt(nombre.substring(4,nombre.length-1));
        if (numero<=255 && numero>=0)
            document.getElementById("resultado").innerHTML=comprobadorLetra(nombre)+numero;
        else ocument.getElementById("resultado").innerHTML="Nombre introducido no válido";
    }
}


function comprobadorLetra(nombre){ //Le introducimos a la función el string dado por el usuario y apartir de un switch que comprueba el último carácter de la cadena, devuelve el número necesario para el comienzo del resultado
    switch(true){
        case (nombre.charAt(nombre.length-1)=="A"):
            return "10.42.68.";
            break;
        case (nombre.charAt(nombre.length-1)=="B"):
            return "10.42.69.";
            break;
        case (nombre.charAt(nombre.length-1)=="C"):
            return "10.52.178.";
            break;


    }


   
}
