<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos - Hospital Morenita</title>
    <link rel="stylesheet" href="static/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-JgZI8Q62FYzw9+B+RPzezqJ24O5GJOsZmChRU/b1v6DpU5KkWwcqEwE05dQ3tOzLWkPj6k5l6Llk2KijbVh0PA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header style="background-color: #007bff; color: #fff; padding: 2px;">
        <div style="display: flex; justify-content: space-between; align-items: center; padding: 10px;">
            <h1 style="margin: 0;">Hospital Morenita</h1>
            <aside>
                <h2>Información de Contacto</h2>
                <p>Estamos aquí para ayudarte, contáctanos para cualquier consulta.</p>
            </aside>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Hospital Morenita</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="servicios.php">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="medicos.php">Médicos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="compras.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chat.php">Chat</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn-toggle" onclick="toggleDarkMode()">Activar Modo Oscuro</button>
                    </li>
                </ul>
                <form class="d-flex ms-auto">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2>Ubicación</h2>
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3325.8403224488497!2d-70.70174968480176!3d-33.58983678072949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d0b508bf7d15%3A0x20c3efb15ec96117!2sDuoc%20UC%20Sede%20San%20Bernardo!5e0!3m2!1ses!2scl!4v1628607122995!5m2!1ses!2scl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <h2 class="mt-4">Información de Contacto</h2>
        <ul class="list-group mt-3">
            <li class="list-group-item"><i class="fas fa-envelope"></i> Email: <a href="mailto:contacto@hospitalmorenita.cl">contacto@hospitalmorenita.cl</a></li>
            <li class="list-group-item"><i class="fas fa-phone"></i> Teléfono: +56 2 1234 5678</li>
            <li class="list-group-item"><i class="fab fa-whatsapp"></i> WhatsApp: +56 9 8765 4321</li>
        </ul>
    </div>
    <script src="static/script.js"></script>
    <!-- Bootstrap Bundle JS (Bootstrap JS + Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
