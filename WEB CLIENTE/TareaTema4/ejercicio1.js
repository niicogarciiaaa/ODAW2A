import {Edificio} from './edificio.js'



let EdificioA = new Edificio("Garcia Prieto","58","15706");
let EdificioB = new Edificio("Camino Caneiro","29","32004");
let EdificioC = new Edificio("San Clemente","s/n","15705");

EdificioA.agregarPlantasYPuertas("2","3");

document.getElementById("resultado").innerHTML += `El codigo postal del edificioA es:${EdificioA.imprimeCodigoPostal()}<br/>`;
document.getElementById("resultado").innerHTML += `La calle del edicicio C es: ${EdificioC.imprimeCalle()}<br/>`;
document.getElementById("resultado").innerHTML += `La calle del edicicio B es:${EdificioB.imprimeCalle()} y el numero es:${EdificioB.imprimeNumero()}  <br/>`;

//planta puerta
EdificioA.agregarPropietario("Jose Antonio Lopez",1,1);
EdificioA.agregarPropietario("Luisa Martínez",1,2);
EdificioA.agregarPropietario("Marta Castellón",1,3);
EdificioA.agregarPropietario("",2,1);
EdificioA.agregarPropietario("Antonio Pereira",2,2);
EdificioA.imprimePlantas();

EdificioA.agregarPlantasYPuertas(1, 3);
EdificioA.agregarPropietario("Pedro Meijide", 3, 2);
EdificioA.imprimePlantas();