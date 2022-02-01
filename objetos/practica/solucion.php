<?php

require 'autoload.php';

// Ejercicio 1
// $persona = new Persona('Bart', 10);
// echo $persona->saludar();

// Ejercicio 2
// $producto = new Producto('Heladera HPK 135', 85000);
// echo $producto->getNombre();
// echo '<br>';
// echo $producto->getPrecio();
// echo '<br>';


// $heladera = new Electrodomestico('Heladera HPK 135', 70000, 'A');
// $top = new Prenda('Top', 3500, 'Blanco', 'M');

// $heladera->mostrarInfo(); // Heladera HPK 135, precio: 70000, consumo: A
// $top->mostrarInfo(); // Top, precio: 3500, color: Blanco, talle: M

// Ejercicio 3
// $top = new Prenda('Top', 3500, 'M', 'Blanco');
// echo $top->mostrarInfo();

// echo '<br>';

// $heladera = new Electrodomestico('Heladera HPK 135', 70000, 'A');
// echo $heladera->mostrarInfo();

// Ejercicio 4
// $top = new Prenda('Top', 3500, 'Blanco', 'M');
// $top->aplicarDescuento(10);
// echo $top->getPrecio(); // 3150

// Ejercicio 5

$heladera = new Electrodomestico('Heladera HPK 135', 70000, 'A');
$heladera->aplicarDescuento(10);

$top = new Prenda('Top', 3500, 'Blanco', 'M');

$carrito = new Carrito;
$carrito->agregarProducto($heladera);
$carrito->agregarProducto($top);
echo $carrito->getTotal(); // devuelve 63000 + 3500 = 66500
