
let abajo=false;
let ventana;
        let intervalo; // Variable para almacenar el intervalo

        

        function crearVentana() {
            ventana = window.open("","", "width=500,height=200");
            abajo=false;
            // Comprobar si la ventana se ha abierto
        
                
                intervalo = setInterval(moverVentana, 10);
        
        }

        function moverVentana() {
          

            if(abajo===false)ventana.moveBy(19,10);
            if(ventana.screenY>=759)abajo=true;
            if(abajo===true)ventana.moveBy(-19,-10)
            if(ventana.screenY==0) abajo=false;
            
            
                
        }
        function pararVentana() {
            clearInterval(intervalo); // Detener el movimiento
          
        }

        function borrarVentana() {
            pararVentana();
           
           
            
                ventana.close(); // Cerrar la ventana emergente
            }
        