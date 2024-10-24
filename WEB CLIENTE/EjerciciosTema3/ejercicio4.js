let radio = prompt("Introduce un radio:");

document.getElementById("resultado").innerHTML +=`${radio} cm /`+radio*2+
                                                    ` cm /`+ (2*Math.PI*radio).toFixed(2)+` cm /`+
                                                     (Math.PI*Math.pow(radio,2)).toFixed(2)+` cm2 /`+
                                                      (4*Math.PI*Math.pow(radio,2)).toFixed(2)+ `cm2/`+
                                                      ((4/3)*Math.PI*Math.pow(radio,3)).toFixed(2)+ `cm3`;
