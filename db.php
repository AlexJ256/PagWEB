<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "inventario_db";

$conexion = new mysqli($server, $username, $password, $database);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
