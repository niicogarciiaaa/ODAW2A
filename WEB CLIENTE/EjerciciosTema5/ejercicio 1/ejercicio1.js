document.addEventListener("mousemove", function (event) {
  let x = event.clientX;
  let y = event.clientY;
  let PosicionRaton = document.getElementById("mousePositions");
  PosicionRaton.innerHTML = "X coords: " + x + ", Y coords: " + y;
});

