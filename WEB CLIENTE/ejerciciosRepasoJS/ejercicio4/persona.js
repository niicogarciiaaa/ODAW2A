export class Persona{
    persona="";
    edad="";
    ocupacion="";

     constructor(nombre="DESCONOCIDO",edad="DESCONOCIDO",ocupacion="DESCONOCIDO"){
        this.nombre= nombre;
        this.edad = edad;
        this.ocupacion= ocupacion;

     }


      modificarNombre(nombre) {
        this.nombre=nombre;
     }
     modificarEdad(edad){
        this.edad=edad;
     }
     modificarOcupacion(Ocupacion){
        this.ocupacion=Ocupacion;
     }
     mostrarInformacion(){
        return "Persona con nombre: "+this.nombre+" con edad "+this.edad+" y ocupación "+this.ocupacion;
     }
     toString(){
        return"nombre: "+this.nombre;
     }
}