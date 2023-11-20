<?php
// Incluye el archivo de configuración de la base de datos y otras funciones
require_once("config/conexion.php");


session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: index.php"); // Redirige si no está autenticado como administrador
    exit();
}

// Aquí puedes incluir el encabezado de tu página HTML (HTML, HEAD, BODY, etc.)

// Muestra el menú de administrador
echo '<h1>Panel de Administrador</h1>';
echo '<ul>';
echo '<li><a href="admin.php?section=productos">Gestionar Productos</a></li>';
echo '<li><a href="admin.php?section=categorias">Gestionar Categorías</a></li>';
echo '<li><a href="admin.php?section=usuarios">Gestionar Usuarios</a></li>';
echo '<li><a href="admin.php?section=pedidos">Gestionar Pedidos</a></li>';
// Puedes agregar más secciones según tus necesidades
echo '</ul>';

// Determina qué sección se debe mostrar según el parámetro 'section' en la URL
$section = isset($_GET['section']) ? $_GET['section'] : '';

// Muestra el contenido de la sección seleccionada
switch ($section) {
    case 'productos':
        include('admin_productos.php'); // Aquí deberías tener el código para gestionar productos
        break;
    case 'categorias':
        include('admin_categorias.php'); // Aquí deberías tener el código para gestionar categorías
        break;
    case 'usuarios':
        include('admin_usuarios.php'); // Aquí deberías tener el código para gestionar usuarios
        break;
    case 'pedidos':
        include('admin_pedidos.php'); // Aquí deberías tener el código para gestionar pedidos
        break;
    // Agrega más casos según sea necesario
    default:
        // Puedes mostrar un mensaje de bienvenida o cualquier otra cosa por defecto
        echo '<p>Bienvenido al Panel de Administrador</p>';
        break;
}

// Aquí puedes incluir el pie de página de tu página HTML

?>
