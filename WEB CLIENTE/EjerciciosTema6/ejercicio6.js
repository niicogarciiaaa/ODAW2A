let parrafos = document.querySelectorAll("p");

function contarParrafos() {
    document.getElementById("resultado").innerHTML += "El total de párrafos es: " + parrafos.length + "<br>";
}

function textoSegundoParrafo() {
    if (parrafos.length >= 2) {
        let textoSegundoParrafo2 = parrafos[1].textContent;
        document.getElementById("resultado").innerHTML += "Texto del segundo párrafo: " + textoSegundoParrafo2 + "<br>";
    }
}

function contarEnlaces() {
    let enlaces = document.querySelectorAll("a");
    document.getElementById("resultado").innerHTML += "El número de enlaces es: " + enlaces.length + "<br>";
}

function primerEnlace() {
    let primerEnlace = document.querySelector("a");
    if (primerEnlace) {
        document.getElementById("resultado").innerHTML += "El texto del primer enlace es: " + primerEnlace.textContent + "<br>";
    }
}

function penultimoEnlace() {
    const enlaces = document.querySelectorAll("a");
    if (enlaces.length >= 2) {
        const penultimoEnlaceHref = enlaces[enlaces.length - 2].href;
        document.getElementById("resultado").innerHTML += "La dirección del penúltimo enlace es: " + penultimoEnlaceHref + "<br>";
    }
}

function enlacesMunicipio() {
    const enlaces = document.querySelectorAll("a");
    let contador = 0;
    enlaces.forEach(enlace => {
        if (enlace.href.includes("/wiki/Municipio")) {
            contador++;
        }
    });
    document.getElementById("resultado").innerHTML += "El número de enlaces que apuntan a '/wiki/Municipio' es: " + contador + "<br>";
}

function enlacesPrimerParrafo() {
    let enlacesPrimerParrafo = document.querySelector("p").querySelectorAll("a").length;
    document.getElementById("resultado").innerHTML += "El número de enlaces en el primer párrafo es: " + enlacesPrimerParrafo + "<br>";
}

function contarElementos() {
    document.querySelectorAll("p").forEach(parrafo => {
        console.log(parrafo.textContent);
    });
}
document.addEventListener("DOMContentLoaded", function() {
    contarParrafos();
    textoSegundoParrafo();
    contarEnlaces();
    primerEnlace();
    penultimoEnlace();
    enlacesMunicipio();
    enlacesPrimerParrafo();
    contarElementos();
});