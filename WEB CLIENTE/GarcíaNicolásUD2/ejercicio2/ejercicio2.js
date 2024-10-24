// Desplazamientos de bits para realizar las operaciones
let resultado1 = 125 >> 3;  // 125 / 8
let resultado2 = 40 << 2;   // 40 x 4
let resultado3 = 25 >> 1;   // 25 / 2
let resultado4 = 10 << 4;   // 10 x 16

document.getElementById("resultado").innerHTML +=`125 / 8 =`+ resultado1+"<br/>";
document.getElementById("resultado").innerHTML +=`40 x 4 =`+ resultado2+"<br/>";
document.getElementById("resultado").innerHTML +=`25 / 2 = ` + resultado3+"<br/>";
document.getElementById("resultado").innerHTML +=`10 x 16 = ` + resultado4+"<br/>";