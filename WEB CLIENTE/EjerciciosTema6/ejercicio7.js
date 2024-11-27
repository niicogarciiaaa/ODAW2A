const edificios = []; // Array de edificios
const formCrearEdificio = document.getElementById('form-crear-edificio');
const formListaEdificios = document.getElementById('form-lista-edificios');
const formMostrarEdificio = document.getElementById('form-mostrar-edificio');
const listaEdificios = document.getElementById('lista-edificios');
const selectEdificio = document.getElementById('select-edificio');
const tablaEdificio = document.getElementById('tabla-edificio');

const formCargarImagen = document.getElementById('form-cargar-imagen');
const inputImagen = document.getElementById('input-imagen');
const galeria = document.getElementById('galeria');

// Agregar edificio
formCrearEdificio.addEventListener('submit', (e) => {
    e.preventDefault();
    const direccion = document.getElementById('direccion').value;
    const plantas = parseInt((document.getElementById('plantas').value));
    const puertas = parseInt((document.getElementById('puertas').value));

    const edificio = {
        direccion,
        plantas,
        puertas,
        propietarios: Array.from({ length: plantas }, () => Array(puertas).fill('Vacío')),
    };

    edificios.push(edificio);
    actualizarListaEdificios();
    formCrearEdificio.reset();
});

// Actualizar lista de edificios
function actualizarListaEdificios() {
    listaEdificios.innerHTML = '';
    selectEdificio.innerHTML = '';

    edificios.forEach((edificio, index) => {
        const radio = document.createElement('input');
        radio.type = 'radio';
        radio.name = 'edificio';
        radio.value = index;

        const label = document.createElement('label');
        label.textContent = edificio.direccion;

        const div = document.createElement('div');
        div.appendChild(radio);
        div.appendChild(label);

        listaEdificios.appendChild(div);

        const option = document.createElement('option');
        option.value = index;
        option.textContent = edificio.direccion;
        selectEdificio.appendChild(option);
    });
}

// Modificar propietario
document.getElementById('modificar-propietario').addEventListener('click', () => {
    const planta = parseInt((document.getElementById('planta').value)-1);
    const puerta = parseInt((document.getElementById('puerta').value)-1);
    const propietario = document.getElementById('propietario').value;

    const seleccionado = document.querySelector('input[name="edificio"]:checked');
    if (seleccionado && planta >= 0 && puerta > 0 && propietario) {
        const edificio = edificios[seleccionado.value];
        if (planta < edificio.plantas && puerta <= edificio.puertas) {
            edificio.propietarios[planta][puerta] = propietario;
            alert('Propietario modificado correctamente');
        } else {
            alert('Planta o puerta fuera de rango');
        }
    } else {
        alert('Por favor seleccione un edificio y complete los campos');
    }
});

// Mostrar edificio
document.getElementById('mostrar-edificio').addEventListener('click', () => {
    const index = parseInt(selectEdificio.value);
    const edificio = edificios[index];
    if (!edificio) return;

    tablaEdificio.innerHTML = '<h3>Edificio en ' + edificio.direccion + '</h3>';
    const table = document.createElement('table');
    const header = document.createElement('tr');
    header.innerHTML = '<th>Planta</th>' + Array.from({ length: edificio.puertas }, (_, i) => `<th>Puerta ${i+1}</th>`).join('');
    table.appendChild(header);

    edificio.propietarios.forEach((planta, i) => {
        const row = document.createElement('tr');
        row.innerHTML = `<td>Planta ${i+1}</td>` + planta.map(p => `<td>${p}</td>`).join('');
        table.appendChild(row);
    });

    tablaEdificio.appendChild(table);
    tablaEdificio.classList.remove('hidden');
});