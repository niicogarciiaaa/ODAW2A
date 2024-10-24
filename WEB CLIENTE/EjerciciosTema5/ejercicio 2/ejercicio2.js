let intervalo
function crearIntervalo(){
     intervalo = setInterval(function(){
       alert("Hola")}, 3000);
}    

function parar(){
    clearInterval(intervalo);
}


document.getElementById("comenzar").addEventListener("click",crearIntervalo);
document.getElementById("parar").addEventListener("click",parar);