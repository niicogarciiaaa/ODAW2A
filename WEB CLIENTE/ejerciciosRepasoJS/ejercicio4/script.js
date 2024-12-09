import { Persona } from "./persona.js";
let Personas=[];

let nombre = document.getElementById("nombre");
let edad = document.getElementById("edad");
let ocupacion = document.getElementById("ocupacion");
let textPersonas = document.getElementById("textPersonas");

let btnactualizar = document.getElementById("actualizar");
let btnanhadir = document.getElementById("anhadir");


function mostrarInformacionCompleta(){
    textPersonas.innerHTML="";
    Personas.forEach(element => {
        let parrafo="";
        
         parrafo = document.createElement("p");
        parrafo.textContent=element.mostrarInformacion();
        textPersonas.appendChild(parrafo);
    });
}
btnactualizar.addEventListener("click",function(){
    mostrarInformacionCompleta();
    setTimeout(function() {
        let respuesta = parseInt(prompt("Que persona quieres modificar?"));
        let personaSeleccionada = Personas[respuesta - 1];
        console.log(personaSeleccionada);
        let atributomodificar=parseInt(prompt("Que atributo quieres Modificar)1 Nombre 2 Edad 3 Ocuapación"));
        switch(atributomodificar){
            case 1:
                let cambio = prompt("Cual es el nuevo nombre?");    
                personaSeleccionada.modificarNombre(cambio);
                console.log(personaSeleccionada);
                mostrarInformacionCompleta();
                
            case 2:
                let cambioedad = prompt("Cual es el nuevo nombre?");    
                personaSeleccionada.modificarEdad(cambioedad);
                console.log(personaSeleccionada);
                mostrarInformacionCompleta();
            case 3:
                let cambioOcupacion = prompt("Cual es la nueva Ocupacion")
                personaSeleccionada.modificarOcupacion(cambioOcupacion);
                console.log(personaSeleccionada);
                mostrarInformacionCompleta();
        }
        if (respuesta) {
            // Aquí puedes manejar lo que el usuario ingresa en el prompt
            alert("Modificando la persona"+Personas[respuesta - 1])
        }
    }, 1000);


});

btnanhadir.addEventListener("click",function(){
    Personas.push(new Persona(nombre.value,edad.value,ocupacion.value))
    console.log(Personas)
});