window.addEventListener("DOMContentLoaded",function(){
    let bloquearTablero = false;

    imagenes.addEventListener("click",cambiarEstado)



    function cambiarEstado(event){
        const cartaSeleccionada = event.target.querySelector('img');

        cartaSeleccionada.src("ocupada.jpg")
    }
});