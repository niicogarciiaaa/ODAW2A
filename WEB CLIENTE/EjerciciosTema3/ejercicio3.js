let opcion = prompt("1.Potencia\n 2.Raiz\n 3.Redondeo\n 4.Trigonometría");
switch(opcion){
        case "1":
            let base = prompt("Introduce una base");
            let exponente = prompt("Introduce un exponente");
            
            document.getElementById("resultado").innerHTML =`El resultado es: `+Math.pow(base,exponente);
            break;

        case "2":
            let numero = prompt("Introduce el numero");
            document.getElementById("resultado").innerHTML = Math.sqrt(numero);
            break;
        case "3":
            let numerodec = prompt("Introduce el numero decimal");
            document.getElementById("resultado").innerHTML =`El numero a la baja es:`+ Math.floor(numerodec)+`<br/> El numero a la alta es:`+ Math.ceil(numerodec);
            
            break;
        case "4":
            let grados = prompt("Introduce los grados");
            let radianes= (grados* Math.PI)/180
            document.getElementById("resultado").innerHTML =`El coseno es: `+ Math.cos(radianes)+`<br/> El seno es: `+ Math.sin(radianes)+`<br/> La tangente es: `+Math.tan(radianes);
            
            break;

        default:
            alert("respuesta no valida")
}