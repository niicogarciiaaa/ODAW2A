import { Producto } from "./producto.js";
import { Inventario } from "./inventario.js";

let textoInventario = document.getElementById("textoInventario");
let productoA = new Producto("Coca-Cola","2","40")
let productoB = new Producto("Fanta","2","23");

let inventario = new Inventario();
inventario.agregarProducto(productoA);
inventario.agregarProducto(productoB);

console.log(inventario.mostrarInventario());
textoInventario.textContent= inventario.mostrarInventario();
textoInventario.textContent= inventario.calcularValorTotal();