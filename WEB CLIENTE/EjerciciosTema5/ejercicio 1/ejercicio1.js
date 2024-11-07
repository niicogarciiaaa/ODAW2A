document.addEventListener("mousemove", function (event) {
  let x = event.clientX;
  let y = event.clientY;
  let PosicionRaton = document.getElementById("posicionRaton");
  PosicionRaton.innerHTML = "Coordenada X: " + x + ",Coordenada Y: " + y;
});

