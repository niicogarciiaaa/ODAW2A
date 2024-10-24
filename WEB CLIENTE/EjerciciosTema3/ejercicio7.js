
//set TimeOut
let fecha = new Date();
let timeout = setTimeout(()=>{document.write(fecha)},2000);


let contador = 0;
const intervalo = setInterval(() => {
    contador++;
    if (contador === 1) { 
        document.write("</br>Fecha actual:", fecha);
    }
}, 2000);

