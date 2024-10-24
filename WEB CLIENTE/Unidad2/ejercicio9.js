let edad = prompt("Introduce tu edad:");


    switch(true){
            case (edad < 0):
                document.write("No se puede introducir un número menor que 0");
                break;
            case (edad < 12):
                document.write("Es un niño");
                break;
            case (edad < 27):
                document.write("Es un joven");
                break;
            case (edad < 61):
                document.write("Es un adulto");
                break;
            case (edad > 60):
                document.write("Es un jubilado");
                break;
            default:
                document.write("Edad no válida");
    }