<?php
session_start();

// Función para calcular el total del carrito
function calcular_total_carrito() {
    $total = 0;
    if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {
        foreach ($_SESSION['carrito'] as $producto) {
            $total += $producto['precio'];
        }
    }
    return $total;
}

// Mostrar productos en el carrito
if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {
    foreach ($_SESSION['carrito'] as $producto) {
        echo '<li class="dropdown-item">' . $producto['nombre'] . ' - $' . $producto['precio'] . '</li>';
    }
    echo '<li><hr class="dropdown-divider"></li>';
    echo '<li class="dropdown-item"><a href="#">Total: <span id="cart-total">$' . calcular_total_carrito() . '</span></a></li>';
    echo '<li><a class="dropdown-item" href="#">Proceder al Pago</a></li>';
} else {
    echo '<li class="dropdown-item">No hay productos en el carrito</li>';
}
?>
