document.getElementById("eventos").addEventListener("mouseover", manejador);
document.getElementById("eventos").addEventListener("mouseout", manejador);
document.getElementById("parrafo1").addEventListener("click", saludo);
document.getElementById("parrafo2").addEventListener("click", saludo);


function manejador(e) {
    //Valoramos la posibilidad de que se utilice un navegador de Microsoft anterior a versión 9 de IE
    if (!e) e = window.event;


    switch (e.type) {
    case "mouseover":
        this.style.color = "purple";
        break;
    case "mouseout":
        this.style.color = "yellow";
        break;
    }
}


function saludo(e) {
    //Valoramos la posibilidad de que se utilice un navegador de Microsoft anterior a version 9 de IE
    if (!e) e = window.event;


    if (e.target.id == "parrafo1") alert("Has pulsado el primer párrafo");
    else if (e.target.id == "parrafo2") alert("Has pulsado el segundo párrafo");


    alert("Has pulsado el " + e.target.id);
}