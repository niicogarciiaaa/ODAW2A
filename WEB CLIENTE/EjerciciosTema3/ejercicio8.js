let nombreCompleto = prompt("Introduce tu nombre completo (nombre y dos apellidos):");
let ArrayDatos = [];

ArrayDatos = nombreCompleto.split(":");

let servidor=ArrayDatos[3].split("@")




document.write("CP: "+ArrayDatos[4]+"<br/>");
document.write("Apellidos: "+ArrayDatos[1]+"<br/>");
document.write("Email: "+ArrayDatos[3]+"<br/>");
document.write("Servidor:"+servidor[1]+"<br/>")
document.write("Telefono: "+ArrayDatos[2]+"<br/>");
