let dia = prompt("Introduce dia de cumpleaños:");
let mes = prompt("Introduce el mes"); 
 // variable para que el usuario introduzca el mes real, y despues se convierta en mes para java
const añoActual = new Date().getFullYear();
let resultado = "";

      for (let año = añoActual; año <= 2100; año++) {
        let cumpleaños = new Date(año, (mes-1), dia);
        if (cumpleaños.getDay() === 0) { // 0 representa domingo
          resultado += año + ", ";
        }
        document.getElementById("resultado").innerHTML = `${resultado}`;
      }