const edificios = []; // Array de edificios
const formCrearEdificio = document.getElementById('form-crear-edificio');
const formMostrarEdificio = document.getElementById('form-mostrar-edificio');
const selectEdificio = document.getElementById('select-edificio');
const tablaEdificio = document.getElementById('tabla-edificio');

// Agregar edificio
formCrearEdificio.addEventListener('submit', (e) => {
    e.preventDefault();
    const direccion = document.getElementById('direccion').value;
    const plantas = parseInt(document.getElementById('plantas').value);
    const puertas = parseInt(document.getElementById('puertas').value);

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
    selectEdificio.innerHTML = '';

    edificios.forEach((edificio, index) => {
        const option = document.createElement('option');
        option.value = index;
        option.textContent = edificio.direccion;
        selectEdificio.appendChild(option);
    });
}

// Mostrar edificio
document.getElementById('mostrar-edificio').addEventListener('click', () => {
    const index = selectEdificio.value;  // Obtener el índice del edificio seleccionado
    if (index === "") return; // Si no hay un edificio seleccionado, no hacer nada
    const edificio = edificios[index];

    tablaEdificio.innerHTML = `<h3>Edificio en ${edificio.direccion}</h3>`;
    const table = document.createElement('table');
    const header = document.createElement('tr');
    header.innerHTML = '<th>Planta</th>' + Array.from({ length: edificio.puertas }, (_, i) => `<th>Puerta ${i + 1}</th>`).join('');
    table.appendChild(header);

    edificio.propietarios.forEach((planta, i) => {
        const row = document.createElement('tr');
    
        const tdPlanta = document.createElement('td');
        tdPlanta.textContent = `Planta ${i + 1}`;
        row.appendChild(tdPlanta);
    
        planta.forEach((propietario, j) => {
            const tdPuerta = document.createElement('td');
            tdPuerta.textContent = propietario;
            tdPuerta.classList.add('editable');
            tdPuerta.setAttribute('data-planta', i);
            tdPuerta.setAttribute('data-puerta', j);

            tdPuerta.addEventListener('click', function () {
                if (tdPuerta.querySelector('input')) return;

                const currentValue = tdPuerta.textContent;
                const input = document.createElement('input');
                input.type = 'text';
                input.value = currentValue;
                tdPuerta.innerHTML = '';
                tdPuerta.appendChild(input);

                input.addEventListener('blur', function () {
                    tdPuerta.textContent = input.value;
                    const plantaIndex = tdPuerta.getAttribute('data-planta');
                    const puertaIndex = tdPuerta.getAttribute('data-puerta');
                    edificio.propietarios[plantaIndex][puertaIndex] = input.value;
                });

                input.addEventListener('keypress', function (e) {
                    if (e.key === 'Enter') {
                        tdPuerta.textContent = input.value;
                        const plantaIndex = tdPuerta.getAttribute('data-planta');
                        const puertaIndex = tdPuerta.getAttribute('data-puerta');
                        edificio.propietarios[plantaIndex][puertaIndex] = input.value;
                    }
                });
            });

            row.appendChild(tdPuerta);
        });

        table.appendChild(row);
    });

    tablaEdificio.appendChild(table);
    tablaEdificio.classList.remove('hidden');
});
