export class Inventario{
    

    constructor(){
        this.productos = [];
    }
    agregarProducto(producto){
        this.productos.push(producto);
    }
    calcularValorTotal() {
        let total = ""; // Inicializamos total a 0
        for (let i = 0; i < this.productos.length; i++) {
            total += this.productos[i].calcularPrecioTotal(); // Suma el precio total de cada producto
        }
        return total;
    }

    mostrarInventario(){
        let texto="";
        for (let i = 0; i < this.productos.length; i++) {
            texto += this.productos[i].obtenerInfo(); // Suma el precio total de cada producto
        }
        return texto;
    }
}