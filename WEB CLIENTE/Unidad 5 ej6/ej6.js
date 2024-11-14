let primera = true;
let primeraCarta;
let segundaCarta;
let imagenes = ["1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg", "1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg"];
let cartas = document.getElementsByTagName('img');

function asignarVolteo() {
    for (let i = 0; i < cartas.length; i++) {
        cartas[i].addEventListener('click', voltearCarta);
    }
}
asignarVolteo();

function quitarVolteo() {
    for (let i = 0; i < cartas.length; i++) {
        cartas[i].removeEventListener('click', voltearCarta);
    }

}

function voltearCarta() {

    this.src = imagenes[this.id];

    if (primera) {
        primera = false;
        primeraCarta = this;
        primeraCarta.removeEventListener('click', voltearCarta);
    } else {
        primera = true;
        segundaCarta = this;
        quitarVolteo();
        if (primeraCarta.src != segundaCarta.src) {
            setTimeout(() => {
                primeraCarta.src = "b.jpg";
                segundaCarta.src = "b.jpg";
                asignarVolteo();
            }, 1000);
        }
        else { asignarVolteo() }
    }

}
