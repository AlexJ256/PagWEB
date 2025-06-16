<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario de Productos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <h1>Listado de Productos</h1>
    </header>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio Compra</th>
                    <th>Precio Venta</th>
                    <th>Proveedor</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Conectar a la base de datos
                $conexion = new mysqli("localhost", "usuario", "contraseña", "inventario_db");

                // Verificar la conexión
                if ($conexion->connect_error) {
                    die("Error de conexión: " . $conexion->connect_error);
                }

                // Consulta para obtener los productos
                $sql = "SELECT * FROM productos";
                $resultado = $conexion->query($sql);

                if ($resultado->num_rows > 0) {
                    while ($producto = $resultado->fetch_assoc()) {
                        echo "<tr>
                                <td>{$producto['nombre']}</td>
                                <td>{$producto['cantidad']}</td>
                                <td>\${$producto['precio_compra']}</td>
                                <td>\${$producto['precio_venta']}</td>
                                <td>{$producto['proveedor']}</td>
                                <td class='actions'>
                                    <a href='modificar_producto.php?id={$producto['id_producto']}' class='btn btn-edit'>Modificar</a>
                                    <form action='eliminar_producto.php' method='POST' style='display:inline;'>
                                        <input type='hidden' name='id' value='{$producto['id_producto']}'>
                                        <button type='submit' class='btn btn-delete' onclick=\"return confirm('¿Estás seguro de que quieres eliminar este producto?');\">Eliminar</button>
                                    </form>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6' class='no-data'>No hay productos en el inventario.</td></tr>";
                }

                // Cerrar conexión
                $conexion->close();
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
