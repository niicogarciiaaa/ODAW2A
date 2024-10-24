window.onload = asignaEventos;

function asignaEventos() {
  document.getElementById("mienlace").onclick = alertar;
}

function alertar() {
  alert("Te conectaremos con la página: " + this.href);
}
