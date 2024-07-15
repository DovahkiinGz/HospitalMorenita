<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Morenita - Servicios</title>
    <link rel="stylesheet" href="static/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header style="background-color: #007bff; color: #fff; padding: 2px;">
        <div style="display: flex; justify-content: space-between; align-items: center; padding: 10px;">
            <h1 style="margin: 0;">Hospital Morenita</h1>
            <aside>
                <h2>Información Adicional</h2>
                <p>Bienvenido al Hospital Morenita, donde cuidamos de tu salud con dedicación y profesionalismo.</p>
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
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="text-center mb-4">Nuestros Servicios</h2>
                <div class="accordion" id="accordionServicios">
                    <!-- Servicio 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingServicio1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseServicio1" aria-expanded="true" aria-controls="collapseServicio1">
                                Consulta médica general
                            </button>
                        </h2>
                        <div id="collapseServicio1" class="accordion-collapse collapse show" aria-labelledby="headingServicio1" data-bs-parent="#accordionServicios">
                            <div class="accordion-body">
                                <p>Nuestros médicos generales están disponibles para consultas de rutina, seguimiento de enfermedades y más.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 2 con Dropdown -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingServicio2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseServicio2" aria-expanded="false" aria-controls="collapseServicio2">
                                Especialidades diversas
                            </button>
                        </h2>
                        <div id="collapseServicio2" class="accordion-collapse collapse" aria-labelledby="headingServicio2" data-bs-parent="#accordionServicios">
                            <div class="accordion-body">
                                <p>Nuestros especialistas abarcan diversas áreas como cardiología, pediatría, ginecología, entre otras.</p>
                                <div class="accordion" id="accordionEspecialidades">
                                    <!-- Sub-especialidades -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingCardiologia">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCardiologia" aria-expanded="false" aria-controls="collapseCardiologia">
                                                Cardiología
                                            </button>
                                        </h2>
                                        <div id="collapseCardiologia" class="accordion-collapse collapse" aria-labelledby="headingCardiologia" data-bs-parent="#accordionEspecialidades">
                                            <div class="accordion-body">
                                                <p>Diagnóstico y tratamiento de enfermedades cardiovasculares.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingPediatría">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePediatría" aria-expanded="false" aria-controls="collapsePediatría">
                                                Pediatría
                                            </button>
                                        </h2>
                                        <div id="collapsePediatría" class="accordion-collapse collapse" aria-labelledby="headingPediatría" data-bs-parent="#accordionEspecialidades">
                                            <div class="accordion-body">
                                                <p>Atención médica especializada para niños y adolescentes.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingServicio3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseServicio3" aria-expanded="false" aria-controls="collapseServicio3">
                                Exámenes de laboratorio
                            </button>
                        </h2>
                        <div id="collapseServicio3" class="accordion-collapse collapse" aria-labelledby="headingServicio3" data-bs-parent="#accordionServicios">
                            <div class="accordion-body">
                                <p>Realizamos una variedad de exámenes de laboratorio para diagnósticos precisos y seguimiento de tratamientos.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Nueva Sección con Imagen -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingNuevaSeccion">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNuevaSeccion" aria-expanded="false" aria-controls="collapseNuevaSeccion">
                                Instalaciones
                            </button>
                        </h2>
                        <div id="collapseNuevaSeccion" class="accordion-collapse collapse" aria-labelledby="headingNuevaSeccion" data-bs-parent="#accordionServicios">
                            <div class="accordion-body">
                                <img src="static/img/hosp.png" class="img-fluid mt-3" alt="Imagen Descriptiva">
                                <img src="static/img/hosp2.png" class="img-fluid mt-3" alt="Imagen Descriptiva">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="static/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
