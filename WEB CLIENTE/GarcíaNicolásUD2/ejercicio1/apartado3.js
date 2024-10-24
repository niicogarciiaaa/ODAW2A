let i = 9;
let j = 1;

do {
    document.getElementById("resultado").innerHTML += `${i} / ${j} = ${(i / j)}` + "<br>";
    j++;
} while (j < 10);
