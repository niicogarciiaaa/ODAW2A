import * as arrays from './arrays.js'; // Importar todas las funciones desde arrays.js
import  {Disco} from './disco.js'

// Ejemplo de uso de la clase Disco
const arraysDiscos = [
    new Disco("Disco1", "Grupo1", 1990, "Indie"),
    new Disco("Disco2", "Grupo2", 2000, "Indie"),
    
];

// Función para mostrar el número de discos
function mostrarNumeroDiscos() {
    document.getElementById('resultado').innerHTML = `El número de discos es ${arrays.mostrarNumeroElementos(arraysDiscos)}`;
}

// Función para generar y mostrar la tabla de discos
function mostrarTablaDatos() {
    const opcion = prompt("¿Cómo quieres mostrar los discos? (1: Normal, 2: Inverso, 3: Alfabético)");
    if(opcion==1){
    document.getElementById('resultado').innerHTML = generarTabla(arraysDiscos);
    }if(opcion==2){
    let discosOrdenados= arrays.mostrarElementosInverso(arraysDiscos);
    document.getElementById('resultado').innerHTML = generarTabla(discosOrdenados);
    }if(opcion==3){
        let discosOrdenAlfabetico = arraysDiscos.sort((a, b) => {
            return a.nombre.toString().localeCompare(b.nombre.toString());
        });
        
    document.getElementById('resultado').innerHTML = generarTabla(discosOrdenAlfabetico);
    }

}



// Función para generar la tabla en HTML
function generarTabla(arraysDiscos) {
    let tabla = `<table>
                    <tr>
                        <th>Nombre</th>
                        <th>Grupo o cantante</th>
                        <th>Año Publicación</th>
                        <th>Tipo de música</th>
                        <th>Localización</th>
                        <th>Prestado</th>
                        <th>Carátula</th>
                    </tr>`;

    for (let i = 0; i < arraysDiscos.length; i++) {
        let prestadoTexto = arraysDiscos[i].prestado ? 'Sí' : 'No'; // Muestra 'Sí' o 'No'
        tabla += `<tr>
                    <td>${arraysDiscos[i].nombre}</td>
                    <td>${arraysDiscos[i].grupoCantante}</td>
                    <td>${arraysDiscos[i].anho}</td>
                    <td>${arraysDiscos[i].tipoMusica}</td>
                    <td>${arraysDiscos[i].localizacion}</td>
                    <td>${prestadoTexto}</td>
                    <td>${arraysDiscos[i].caratula}</td>
                  </tr>`;
    }

    tabla += `</table>`;
    return tabla;
}



function anhadirdisco() {
    const opcion = prompt("¿Añadir disco por el principio (Opción 1) o añadir por el final (Opción 2)?");
    let nombre1 = prompt("Introduce el nombre del disco");
    let grupoCantante1 = prompt("Introduce el grupo/cantante del disco");
    let anho1 = prompt("Introduce el año del disco");
    let tipoMusica1 = prompt("Introduce el tipo del disco").toLowerCase();
    let localizacion = prompt("Localización?") || "0";
    let prestado = prompt("¿Está prestado? (Sí/No)")?.toLowerCase() === 'sí'; 
    let caratula = prompt("Carátula") || "imagen.jpg";

    const tiposPermitidos = ["rock", "pop", "punk", "indie"];
    
    // Verificar el tipo de música antes de crear el disco
    if (!tiposPermitidos.includes(tipoMusica1)) {
        document.getElementById("resultado").innerHTML+=`Tipo de música no válido. Debe ser 'rock', 'pop', 'punk' o 'indie'.`
        return; // Salir de la función si el tipo no es válido
    }

    const disconuevo = new Disco(nombre1, grupoCantante1, anho1, tipoMusica1, localizacion, prestado, caratula);

    // Añadir disco según la opción seleccionada
    if (opcion == 1) {
        arrays.añadirElementoPrincipio(arraysDiscos, disconuevo);
    } else if (opcion == 2) {
        arrays.añadirElementoFinal(arraysDiscos, disconuevo);
    } else {
        document.getElementById('resultado').innerHTML += "Opción no válida";
        return; // Salir si la opción no es válida
    }

    
}


function borrarDisco(){
    const opcion = prompt("Eliminar disco por el principio(Opción 1) o añadir por el final(Opción 2)");
    if(opcion==1){

        arrays.borrarElementoPrincipio(arraysDiscos);
        
    }else if(opcion==2){
        arrays.borrarElementoFinal(arraysDiscos);
        
    }else{
        document.getElementById('resultado').innerHTML += "Opción no valida";

    }
}



function consultarDisco() {
    const tipoConsulta = prompt("¿Cómo quieres consultar? (1: Por posición, 2: Por nombre)");

    if (tipoConsulta === '1') {

        const posicion = prompt("Introduce la posición del disco (empezando desde 0):");

        if (posicion >= 0 && posicion < arraysDiscos.length) {
            const disco = arrays.mostrarElementoPorPosicion(arraysDiscos, posicion);
            document.getElementById('resultado2').innerHTML += `El disco en la posición ${posicion} es: ${disco.nombre}`;
        } else {
            document.getElementById('resultado2').innerHTML += "Posición no válida.";
        }
        
    } else if (tipoConsulta === '2') {
        const nombre = prompt("Introduce el nombre del disco:");
        const disco = arraysDiscos.find(disco => disco.nombre.toLowerCase() === nombre.toLowerCase());
        if (disco) {
            const posicion = arraysDiscos.indexOf(disco);
            document.getElementById('resultado2').innerHTML = `El disco "${disco.nombre}" está en la posición ${posicion}.`;
        } else {
            document.getElementById('resultado2').innerHTML = `No se encontró un disco con el nombre "${nombre}".`;
        }
    } else {
        document.getElementById('resultado2').innerHTML = "Opción no válida.";
    }
}

    function MostrarDiscosIntervalos() {
        const anhominimo = parseInt(prompt("Año de comienzo del intervalo"), 10); 
        const anhomaximo = parseInt(prompt("Año de fin del intervalo"), 10);
        
        
    
        // Función para verificar si un disco está dentro del intervalo
        function dentroDelIntervalo(disco, anioInicio, anioFin) {
            return disco.anho >= anioInicio && disco.anho <= anioFin;
        }
    
        // Función para filtrar discos por intervalo de años
        function filtrarDiscosPorAnio(arraysDiscos, anioInicio, anioFin) {
            return arraysDiscos.filter(function(disco) {
                return dentroDelIntervalo(disco, anioInicio, anioFin);
            });
        }
    
        // Filtrar discos
        const discosFiltrados = filtrarDiscosPorAnio(arraysDiscos, anhominimo, anhomaximo);
    
        // Imprimir resultados
        if (discosFiltrados.length > 0) {
            let resultado = "<h3>Discos dentro del intervalo:</h3>";
            resultado += `<ul>`;
            discosFiltrados.forEach(disco => {
                resultado += `<li>${disco.nombre} - ${disco.grupoCantante} (${disco.anho})</li>`;
                generarTabla(resultado);
            });
            resultado += `</ul>`;
            document.getElementById('resultado').innerHTML = resultado; // Mostrar resultados en el elemento con id "resultado"
        } else {
            document.getElementById('resultado').innerHTML = "No hay discos en el intervalo especificado.";
        }
    }


window.mostrarNumeroDiscos=mostrarNumeroDiscos;
window.anhadirdisco=anhadirdisco;
window.borrarDisco=borrarDisco;
window.mostrarTablaDatos=mostrarTablaDatos;
window.consultarDisco=consultarDisco;
window.MostrarDiscosIntervalos=MostrarDiscosIntervalos
