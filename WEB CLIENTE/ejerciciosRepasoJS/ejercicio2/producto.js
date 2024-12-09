export class Producto{
     nombre="";
     precio="";
     cantidad="";
     descuento="";
    constructor(nombre,precio,cantidad){
        this.nombre= nombre;
        this.precio= precio;
        this.cantidad= cantidad;
    }
    aplicarDescuento(descuento){
        this.descuento=descuento;
    }
    obtenerInfo() {
        if(this.descuento>0){
            this.precio=this.precio - (this.precio * (this.descuento / 100));
        // Método que retorna la información del producto
        return `Producto: ${this.nombre}, Precio: ${this.precio}, Cantidad: ${this.cantidad}\n`;
    }else{
        return `Producto: ${this.nombre}, Precio: ${this.precio}, Cantidad: ${this.cantidad}\n`;
    }
}
    actualizarStock(nuevoStock){
        this.cantidad= nuevoStock;
    }
    calcularPrecioTotal(){
        return "Precio total= "+(this.precio*this.cantidad)
    }
}