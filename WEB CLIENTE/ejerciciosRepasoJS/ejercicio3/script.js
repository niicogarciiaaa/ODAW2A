import { Producto } from "../ejercicio2/producto.js";
let nombre =document.getElementById("nombre");
let precio = document.getElementById("precio");
let cantidad = document.getElementById("cantidad");
let botonanhadir = document.getElementById("btnanhadir");
let btnmostrar = document.getElementById("btnmostrar");
let textcontainer = document.getElementById("textcontainer");
let arrayProductos=[];
function anhadirproducto(){

    arrayProductos.push(new Producto(nombre.value,precio.value,cantidad.value));
    console.log(arrayProductos);
}
function mostrarArray() {
    // Obtener el contenedor de texto (asegurándote de que esté definido en tu HTML)
    let textcontainer = document.getElementById("textcontainer");
    // Limpiar el contenedor antes de agregar nuevos productos
    textcontainer.innerHTML = "";
    let respuesta = prompt("Quieres mostrarlo en orden normal(1) o invertido(2)")
    // Recorrer el array de productos
    if(respuesta === "1"){
    arrayProductos.forEach(element => {
        // Crear un nuevo párrafo para cada producto
        let parrafo = document.createElement("p");
    
        parrafo.textContent = "Nombre: " + element.nombre + " | Precio: " + element.precio + " | Cantidad: " + element.cantidad;
    
        // Añadir el párrafo al contenedor
        textcontainer.appendChild(parrafo);
    });
    }else if(respuesta ==="2"){
        let arrayInverso = arrayProductos.slice().reverse();
        arrayInverso.forEach(element => {
        let parrafo = document.createElement("p");
        parrafo.textContent = "Nombre: " + element.nombre + " | Precio: " + element.precio + " | Cantidad: " + element.cantidad;
        
        // Añadir el párrafo al contenedor
        textcontainer.appendChild(parrafo);
    });
    }
}


function eliminarElemento(){
    let decision=prompt("Eliminar por el principio(1) | eliminar por el final (2)");
    if(decision ==="1"){
        arrayProductos.shift();
    }else if(decision=== "2"){
        arrayProductos.pop()
    }
}

botonanhadir.addEventListener("click",anhadirproducto);
btnmostrar.addEventListener("click",mostrarArray);
document.getElementById("btneliminar").addEventListener("click",eliminarElemento);