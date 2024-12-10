function crearInput(){
    let input = document.createElement("input")
    input.id =
    input.name= prompt("Introduce el atributo nombre");
    confirm("El nombre del input es: "+input.name)
    document.body.appendChild(input);
}
function crearPass(){
    let input = document.createElement("input");
    input.type = "password";
    input.name= prompt("Introduce el atributo nombre");
    confirm("El nombre del input es: "+input.name)
    document.body.appendChild(input)
}
function crearTextarea(){
    let textarea = document.createElement("textarea");
    textarea.name= prompt("Introduce el atributo nombre");
    textarea.setAttribute('cols', '40');
    textarea.setAttribute('rows', '5'); 
    confirm("El nombre del input es: "+textarea.name);
    document.body.appendChild(textarea);
}
function crearLabel(){
    let atributo = prompt("Introduce el atributo nombre");
    let label = document.createElement("label");
    label.textContent= prompt("Introduce el texto del label")
    label.setAttribute('for',atributo );
    confirm("El nombre del input es: "+atributo);
    document.body.appendChild(label);
}
function crearImagen() {
    const ruta = prompt("¿Cuál es la ruta de la imagen (atributo src)?");
    const img = document.createElement('img');
    img.src = ruta;
    document.body.appendChild(img); 
}
function crearCheckbox() {
    const nombre = prompt("¿Cuál es el nombre del checkbox (atributo name)?");
    const valor = prompt("¿Cuál es el valor del checkbox (atributo value)?");
    const checkbox = document.createElement('input');
    checkbox.type = 'checkbox';
    checkbox.name = nombre;
    checkbox.value = valor;
    document.body.appendChild(checkbox);
}
function crearRadio() {
    const nombre = prompt("¿Cuál es el nombre del radio (atributo name)?");
    const valor = prompt("¿Cuál es el valor del radio (atributo value)?");
    const radio = document.createElement('input');
    radio.type = 'radio';
    radio.name = nombre;
    radio.value = valor;
    document.body.appendChild(radio);
}
function crearBoton() {
    const nombre = prompt("¿Cuál es el nombre del botón (atributo name)?");
    const valor = prompt("¿Cuál es el valor del botón (atributo value)?");
    const boton = document.createElement('button');
    boton.type = 'submit';
    boton.name = nombre;
    boton.value = valor;
    boton.textContent = "Enviar";
    document.body.appendChild(boton);
}

document.getElementById("CrearInput").addEventListener("click",crearInput);
document.getElementById("CrearPass").addEventListener("click",crearPass);
document.getElementById("CrearTextarea").addEventListener("click",crearTextarea);
document.getElementById("CrearLabel").addEventListener("click",crearLabel);
document.getElementById("CrearImg").addEventListener("click",crearImagen);
document.getElementById("CrearCheckbox").addEventListener("click",crearCheckbox);
document.getElementById("CrearRadio").addEventListener("click",crearRadio);
document.getElementById("CrearButton").addEventListener("click",crearBoton)


