let edad = prompt("Introduce tu edad:");

if (edad >= 0) {
  if (edad > 0 && edad <= 12) document.write("<es un niño");
  else {
    if (edad > 12 && edad <= 26) document.write("es un Joven");
    else {
      if (edad > 27 && edad < 60) document.write("es un adulto");
      
      else {
        if (edad >= 60) {
          document.write("Es un jubilado");
        }
      }
    }
  }
} else {
  alert("No se puede introducir un numero menor de 0");
}
