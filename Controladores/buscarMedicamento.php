<?php
// Simulando una lista de medicamentos
$medicamentos = [
    1 => 'paracetamol',
    2 => 'ibuprofeno',
    3 => 'amoxicilina',
    4 => 'salbutamol',
    // Agregar más medicamentos según sea necesario
];

// Obtener el término de búsqueda
$q = isset($_GET['q']) ? strtolower($_GET['q']) : '';

// Buscar el medicamento correspondiente
foreach ($medicamentos as $id => $medicamento) {
    if (strtolower($medicamento) === $q) {
        // Redirigir a la página del medicamento
        header("Location: medicamento.php?id=$id");
        exit();
    }
}

// Si no se encuentra, redirigir a una página de error o mostrar un mensaje
header("Location: error.php");
exit();
?>
