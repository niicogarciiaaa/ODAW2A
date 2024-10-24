const divext = document.getElementById("exterior");
const divint = document.getElementById("interior");

divext.addEventListener("click", clicendivext, true); //false fase de burbujeo (dentro a fuera)
divint.addEventListener("click", clicendivint, false); //true fase de captura (fuera d dentro)
divext.addEventListener("click", clicendivext, false); //false fase de burbujeo (dentro a fuera)


function clicendivext(e) {
  alert("exterior");
  //e.stopPropagation(); //detiene la propagación solo en burbujeo
}
function clicendivint(e) {
  alert("interior");
  //e.stopPropagation();
}
