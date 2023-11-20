<?php
// Incluir archivo de configuración de la base de datos y otras funciones
require_once("config/conexion.php");

// Verificar si el usuario está autenticado como administrador
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: index.php"); // Redirigir si no está autenticado como administrador
    exit();
}

// Aquí deberías incluir el encabezado de tu página HTML (HTML, HEAD, BODY, etc.)
?>

<h2>Gestionar Productos</h2>

<!-- Mostrar lista de productos -->
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Acciones</th>
    </tr>

    <?php
    // Obtener la lista de productos desde la base de datos
    $query = "SELECT * FROM productos";
    $result = mysqli_query($conexion, $query);

    // Mostrar cada producto en una fila de la tabla
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['nombre']}</td>";
        echo "<td>{$row['descripcion']}</td>";
        echo "<td>{$row['precio']}</td>";
        echo "<td>{$row['stock']}</td>";
        echo "<td><a href='editar_producto.php?id={$row['id']}'>Editar</a> | <a href='eliminar_producto.php?id={$row['id']}'>Eliminar</a></td>";
        echo "</tr>";
    }
    ?>
</table>

<!-- Formulario para agregar nuevo producto -->
<h3>Agregar Nuevo Producto</h3>
<form action="procesar_producto.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required><br>

    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" required></textarea><br>

    <label for="precio">Precio:</label>
    <input type="number" name="precio" step="0.01" required><br>

    <label for="stock">Stock:</label>
    <input type="number" name="stock" required><br>

    <input type="submit" value="Agregar Producto">
</form>

<?php
// Aquí deberías incluir el pie de página de tu página HTML
?>
