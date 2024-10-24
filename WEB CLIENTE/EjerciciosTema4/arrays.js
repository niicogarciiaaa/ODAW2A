// arrays.js

// Función para mostrar el número de elementos del array
export function mostrarNumeroElementos(array) {
    return array.length;
}

// Función para mostrar todos los elementos del array
export function mostrarElementos(array) {
    return array;
}

// Función para mostrar los elementos del array en sentido inverso
export function mostrarElementosInverso(array) {
    return array.slice().reverse();
}

// Función para mostrar los elementos del array ordenados alfabéticamente
export function mostrarElementosOrdenados(array) {
    return array.slice().sort();
}

// Función para añadir un elemento al principio del array
export function añadirElementoPrincipio(array, elemento) {
    array.unshift(elemento);
    return array;
}

// Función para añadir un elemento al final del array
export function añadirElementoFinal(array, elemento) {
    array.push(elemento);
    return array;
}

// Función para borrar un elemento al principio del array
export function borrarElementoPrincipio(array) {
    let elementoBorrado = array.shift();
    return { array, elementoBorrado };
}

// Función para borrar un elemento al final del array
export function borrarElementoFinal(array) {
    const elementoBorrado = array.pop();
    return { array, elementoBorrado };
}

// Función para mostrar el elemento en una posición indicada por el usuario
export function mostrarElementoPorPosicion(array, posicion) {
    return array[posicion];
}

// Función para mostrar la posición de un elemento indicado por el usuario
export function mostrarPosicionPorElemento(array, elemento) {
    return array.indexOf(elemento);
}
        