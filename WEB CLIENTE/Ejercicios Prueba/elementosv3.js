 
 window.addEventListener("load",asignarEventos)
 /* elemento.addEventListener("<evento_sin_on>",<funcion>,<false|true>); */


 function asignarEventos(){
    document.getElementById("w3c").addEventListener("click", saludarUnaVez, false);
    document.getElementById("w3c").addEventListener("click", colorearse, false);
    document.getElementById("w3c").addEventListener("mouseover", fondo, false);
    document.getElementById("w3canonima").addEventListener("click", function () {
        this.style.background = "#C0C0C0";
    });
 }
 
 function saludarUnaVez() {
     alert("¡Hola, caracola!");
     document.getElementById("w3c").removeEventListener("click", saludarUnaVez);
 }

 function colorearse() {
     document.getElementById("w3c").style.color = "red";
 }

 function fondo() {
     document.getElementById("w3c").style.background = "blue";
 }

 /* Funciones anónimas */
 /* elemento.addEventListener("<evento_sin_on>",function(){<codigo_funcion}),false); */
