let respuesta = prompt("Cual fue el apellido del primer presidente de la democracia española ")

while(respuesta!="Adolfo Suarez"){
    if(respuesta=="Adolfo"){
        alert("Te falta el apellido")
    }else if(respuesta="Suarez"){
        alert("Te falta el Nombre")
    }else{
        alert("ERROR. Inténtalo de nuevo")
    }
     respuesta = prompt("Cual fue el apellido del primer presidente de la democracia española ")
}
document.write("Respuesta correcta, acceso concedido")