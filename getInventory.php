<?php
header('Content-Type: application/json');
include 'db.php';

$sql = "SELECT * FROM productos";
$resultado = $conexion->query($sql);

$productos = [];

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        $productos[] = $fila;
    }
}

echo json_encode($productos);
$conexion->close();
?>
