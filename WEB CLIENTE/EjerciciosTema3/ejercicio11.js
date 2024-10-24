console.log(navigator.geolocation.getCurrentPosition(mostrarCoordenadas));


function mostrarCoordenadas(posicion) {
    const latitud = posicion.coords.latitude;
    const longitud = posicion.coords.longitude;
    console.log("Latitud: " + latitud);
    console.log("Longitud: " + longitud);
}

