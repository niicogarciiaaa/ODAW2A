class Persona {
    constructor(nombre, edad) {
      this.nombre = nombre;
      this.edad = edad;
    }
  }
  
  // Crear un array de objetos de la clase Persona
  const personas = [
    new Persona("Juan", 25),
    new Persona("Ana", 30),
    new Persona("Carlos", 22)
  ];
  
  // Función que recibe el nombre de la propiedad y ordena el array según esa propiedad
  function ordenarPorPropiedad(lista, propiedad) {
   if (typeof(lista[0])== "object")
    return lista.sort((a, b) => {
      if (a[propiedad] < b[propiedad]) {
        return -1;
      }
      if (a[propiedad] > b[propiedad]) {
        return 1;
      }
      return 0;
    });
    else
      return lista.sort();
  }
  
  // Ordenar el array por 'edad'
  const ordenadoPorEdad = ordenarPorPropiedad(personas, 'edad');
  console.log(ordenadoPorEdad);
  
  // Ordenar el array por 'nombre'
  const ordenadoPorNombre = ordenarPorPropiedad(personas, 'nombre');
  console.log(ordenadoPorNombre);
  