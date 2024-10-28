document.addEventListener("keyup",calcularLetra);
 

function calcularLetra() {
    const letras = "TRWAGMYFPDXBNJZSQVHLCKE";
    let dni=document.getElementById("dni").value;

    let indice= dni%23;
    let letra=letras.charAt(indice);


    document.getElementById("letra").value= letra;
};