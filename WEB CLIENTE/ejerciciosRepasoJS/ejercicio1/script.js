let formulario = document.getElementById("formulario");
let nombre = document.getElementById("nombre");
let correo = document.getElementById("correo");
let contenedorErrores = document.getElementById("contenedorErrores");
formulario.addEventListener("submit", validarFormulario);
let errores = document.createElement("p");
let validacion = false;
let errorFinal = document.createElement("p");


function validarFormulario(event){
    event.preventDefault();
    contenedorErrores.innerHTML="";

    if(nombre.value == ""){
        errores.textContent= "el campo del nombre no puede estar vacío";
        contenedorErrores.appendChild(errores);
        validacion= false;

    }else{
        confirm("el nombre es "+nombre.value);
        validacion= true;
        errores.textContent= ""
        contenedorErrores.appendChild(errores);
    }
    if(correo.value == ""){
         errores = document.createElement("p");
        errores.textContent= "el campo del correo no puede estar vacío"
        contenedorErrores.appendChild(errores);
        validacion= false;  
    }
    let regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
     // Verificar si el correo está vacío
     if (correo.value == "") {
        let errores = document.createElement("p");
        errores.textContent = "El campo del correo no puede estar vacío";
        contenedorErrores.appendChild(errores);
        validacion = false;
    } 
    // Verificar si el correo es válido
    else if (!regex.test(correo.value)) {
        let errores = document.createElement("p");
        errores.textContent = "El correo no es válido";
        contenedorErrores.appendChild(errores);
        validacion = false;
    } 
    // Si el correo es válido
    else {
        validacion = true;
        confirm("El correo es "+correo.value)
    }

    if (!validacion) {
        errorFinal.textContent = "Los campos no pueden estar vacíos";
        errorFinal.classList.add("error");  // Clase para mostrar los errores
    } else {
        errorFinal.textContent = "Formulario completado con éxito";
        errorFinal.classList.add("correcto");  // Clase para el mensaje de éxito

        formulario.reset();  // Limpiar el formulario si la validación es exitosa
    }
    contenedorErrores.appendChild(errorFinal);
}