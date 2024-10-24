let nombreCompleto = prompt("Introduce tu nombre completo (nombre y dos apellidos):");
let ArrayNombreyApellidos = [];


ArrayNombreyApellidos = nombreCompleto.split(" ");


let tamanhoSinEspacios = 0;
for (let i = 0; i < nombreCompleto.length; i++) {
    if (nombreCompleto[i] !== " ") { 
        tamanhoSinEspacios++;
    }
}


document.write("El tamaño del nombre más los apellidos (sin contar espacios): " + tamanhoSinEspacios + "<br>");

document.write("En minusculas: "+nombreCompleto.toLowerCase()+"<br/>")
document.write("En mayusculas: "+nombreCompleto.toUpperCase()+"<br/>")
document.write("Nombre: "+ArrayNombreyApellidos[0]+"<br/>");
document.write("Apellido1: "+ArrayNombreyApellidos[1]+"<br/>");
document.write("Apellido2: "+ArrayNombreyApellidos[2]+"<br/>");

let usuario1 = ArrayNombreyApellidos[0][0].toLowerCase() + ArrayNombreyApellidos[1].toLowerCase() + ArrayNombreyApellidos[2][0].toLowerCase();
document.write("Propuesta de nombre de usuario 1: " + usuario1 + "<br>");


let usuario2 = ArrayNombreyApellidos[0].substring(0, 3) + ArrayNombreyApellidos[1].substring(0, 3) + ArrayNombreyApellidos[2].substring(0, 3);
document.write("Propuesta de nombre de usuario 2: " + usuario2 + "<br>");