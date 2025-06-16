<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $cantidad = $_POST["cantidad"];
    $precio_compra = $_POST["precio_compra"];
    $precio_venta = $_POST["precio_venta"];
    $proveedor = $_POST["proveedor"];

    $sql = "INSERT INTO productos (nombre, cantidad, precio_compra, precio_venta, proveedor) VALUES ('$nombre', $cantidad, $precio_compra, $precio_venta, '$proveedor')";

    if ($conexion->query($sql) === TRUE) {
        echo json_encode(["mensaje" => "Producto agregado correctamente"]);
    } else {
        echo json_encode(["error" => "Error al agregar el producto"]);
    }

    $conexion->close();
}
?>
