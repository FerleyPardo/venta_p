<?php
include('db.php');

// Obtener productos en el carrito
$carrito_query = $conn->query("SELECT carrito.id, productos.nombre, productos.precio, carrito.cantidad FROM carrito JOIN productos ON carrito.producto_id = productos.id");
$carrito = $carrito_query->fetch_all(MYSQLI_ASSOC);
$total = 0;
?>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($carrito as $item): ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['nombre']; ?></td>
                <td>$<?php echo $item['precio']; ?></td>
                <td><?php echo $item['cantidad']; ?></td>
                <td>$<?php echo $item['precio'] * $item['cantidad']; ?></td>
            </tr>
            <?php $total += $item['precio'] * $item['cantidad']; ?>
        <?php endforeach; ?>
    </tbody>
</table>

<p>Total: $<?php echo $total; ?></p>
