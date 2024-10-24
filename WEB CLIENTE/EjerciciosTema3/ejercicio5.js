let numero = parseInt(prompt("Introduce un numero:"));


document.getElementById("resultado").innerHTML =numero.toExponential()+` / `+
                                                 numero.toFixed(4)+` / `+
                                                 numero.toString(2)+` / `+
                                                 numero.toString(8)+` / `+
                                                 numero.toString(16);
