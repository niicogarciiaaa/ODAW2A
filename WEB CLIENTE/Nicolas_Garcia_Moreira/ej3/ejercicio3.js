const Alumnos=[];
 class alumno{
    notas=[];
    constructor(nombre,apellidos,correo,){
        this.nombre=nombre;
        this.apellidos=apellidos;
        this.correo=correo;
        this.notas=[];
    }


    toString(){
        return "Alumno con nombre "+this.nombre+" con apellidos: "+this.apellidos+"con nota: "+this.notas
    }
    agregarNotaAArray(nota){
        this.notas.push(nota);
    }
    media(){
        let suma
        this.notas.forEach(nota => {
            suma+=nota;
        });

        return suma/this.notas.length
    }
}

window.addEventListener("DOMContentLoaded",function(){
    let formulario = document.getElementsByTagName("form")[0];
    let nombre = document.getElementById("nombre");
    let apellidos = document.getElementById("apellidos");
    let correo = document.getElementById("correo");
    let nota = document.getElementById("nota");


    let boton = document.createElement("button");
    boton.textContent="Buscar"
    boton.setAttribute("id","idBoton");
    formulario.appendChild(boton);
    function validaNombre(){

        
        if(nombre.value==""){
            let parrafo = document.createElement("p");
            
            parrafo.textContent="El nombre no puede estar vacío";
            aplicarError("nombre");
            formulario.appendChild(parrafo);
            return false;
        }else if(nombre.value.length<=5 && nombre.value.length>=20){
            let parrafo = document.createElement("p");
            parrafo.textContent="El nombre debe tener entre 5 y 20 caracteres";
            aplicarError("nombre");
            formulario.appendChild(parrafo);
            return false;
            
        }else{
            removerError("nombre");
            return true;
        }
        
    }
    function validaApellidos(){        
        if(apellidos.value==""){
            
            let parrafo = document.createElement("p");
            parrafo.textContent="Los apellidos  no pueden estar vacíos";
            aplicarError("apellidos");
            formulario.appendChild(parrafo);
            return false;
        }else if(apellidos.value.length<=2 &&apellidos.value.length>=50){
            let parrafo = document.createElement("p");
            parrafo.textContent="El nombre debe tener entre 2 y 50 caracteres";
            
            aplicarError("apellidos");
            formulario.appendChild(parrafo);
            return false;
        }else{
            removerError("apellidos")
            return true;
        }
    
    }
    function validaCorreo(){
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if(correo.value==""){
            
            let parrafo = document.createElement("p");
            parrafo.innerHTML="";
            parrafo.textContent="El correo no puede estar vacío";
            aplicarError("correo");
            formulario.appendChild(parrafo);
            return true;
            
         }else if(emailRegex.test(correo)){

             removerError("correo");
             return true;
         }else{
             let parrafo = document.createElement("p");
            parrafo.innerHTML="";
             parrafo.textContent="El correo debe contener una @";
            
            aplicarError("correo");
            formulario.appendChild(parrafo);
             return false;
        }
    }
    function validaNota(){
        if(nota.value==""){
            
            let parrafo = document.createElement("p");
            parrafo.innerHTML="";
            parrafo.textContent="La nota no puede estar vacía";
            aplicarError("nota");
            formulario.appendChild(parrafo);
            return false;
            
        }else if(nombre.value>0 &&nombre.value.length<=10){
            let parrafo = document.createElement("p");
            parrafo.innerHTML="";
            parrafo.textContent="La nota debe ser un numero entre 0 y 10";
            
            aplicarError("nota");
            formulario.appendChild(parrafo);
            return false;
        }else{
            removerError("nota");
            return true;
        }
    }
    
    
    
    function aplicarError(idInput) {
        document.getElementById(idInput).classList.add('errorInput');
        
    }
    
    
    function removerError(idInput) {
        document.getElementById(idInput).classList.add('errorInput');
    }
    

formulario.addEventListener("submit", function (event) {
        event.preventDefault();
        // let validacionCorrecta = true;
        // if (!validaNombre()) validacionCorrecta = false;
        // if (!validaApellidos()) validacionCorrecta = false;
        // if (!validaCorreo()) validacionCorrecta = false;
        // if (!validaNota()) validacionCorrecta = false;
        // console.log(validacionCorrecta);
        // if (validacionCorrecta) {
        //     // Guardar el nombre en localStorage para que esté disponible al recargar
        //     alert("Registrar notas de"+nombre.value+" "+apellidos.value)
        // }

        let alumnoinstancia = new alumno(nombre.value,apellidos.value,correo.value);
        Alumnos.push(alumnoinstancia);
        alumnoinstancia.agregarNotaAArray(nota.value);
       console.log(Alumnos)
    
    });

    document.getElementById("idBoton").addEventListener("click",function(event){
        event.preventDefault();
        let email=prompt("Introduce el email");

        for(let i=0;i<Alumnos.length;i++){
            if(Alumnos[i].email=== email){
                let parrafo = document.createElement("p");
                
                parrafo.textContent +=(`El alumno con nombre ${nombre} y apellidos ${apellidos} tiene una nota media de ${this.media()}`);
                
            }
        }

    });
});















