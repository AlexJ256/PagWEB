<?php
// Encabezado para indicar que el contenido es JSON
header('Content-Type: application/json');

// Simulación de datos de inventario (en un caso real se obtendrían de la DB)
$productos = [
    [ "id_producto" => 1, "nombre" => "Producto A", "cantidad" => 10, "precio_compra" => 1000, "precio_venta" => 1500, "proveedor" => "Proveedor X" ],
    [ "id_producto" => 2, "nombre" => "Producto B", "cantidad" => 5, "precio_compra" => 2000, "precio_venta" => 3000, "proveedor" => "Proveedor Y" ],
    [ "id_producto" => 3, "nombre" => "Producto C", "cantidad" => 8, "precio_compra" => 1200, "precio_venta" => 1800, "proveedor" => "Proveedor Z" ]
];

// Devolver datos en formato JSON
echo json_encode($productos);
?>
