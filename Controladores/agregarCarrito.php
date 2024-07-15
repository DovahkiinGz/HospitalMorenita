<?php
session_start();

// Verificar si se ha recibido un ID de producto válido
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $producto_id = $_GET['id'];

    // Obtener detalles del producto (simulación)
    $productos = [
        1 => ['nombre' => 'Salbutamol', 'precio' => 50],
        2 => ['nombre' => 'Paracetamol', 'precio' => 20],
        3 => ['nombre' => 'Prednisona', 'precio' => 30],
        4 => ['nombre' => 'Ibuprofeno', 'precio' => 25],
        5 => ['nombre' => 'Omeprazol', 'precio' => 15],
        6 => ['nombre' => 'Amoxicilina', 'precio' => 35],
        7 => ['nombre' => 'Simvastatina', 'precio' => 40],
    ];

    // Verificar si el producto existe en la base de datos simulada
    if (array_key_exists($producto_id, $productos)) {
        $producto = $productos[$producto_id];

        // Inicializar el carrito si aún no está creado
        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = [];
        }

        // Agregar el producto al carrito
        $_SESSION['carrito'][] = [
            'id' => $producto_id,
            'nombre' => $producto['nombre'],
            'precio' => $producto['precio'],
        ];

        // Redirigir de vuelta a la página de productos
        header('Location: productos.php');
        exit;
    }
}

// Si no se proporciona un ID válido, redirigir a la página de productos
header('Location: productos.php');
exit;
?>
