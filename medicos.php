<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médicos - Hospital Morenita</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="static/style.css">
</head>
<body>
    <!-- Navbar -->
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
                        <a class="nav-link" href="servicios.php">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="medicos.php">Médicos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="compras.php">Productos</a>
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

    <!-- Main Content -->
    <div class="container mt-4">
        <h1 class="text-center mb-4">Médicos</h1>

        <!-- Carrusel de Imágenes de Médicos -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="static/img/doctor1.png" class="d-block w-100" alt="Doctor 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Dr. Juan Pérez</h5>
                        <p>specialista en cardiología con más de 15 años de experiencia. Reconocido por su dedicación y precisión en el diagnóstico y tratamiento de enfermedades cardíacas.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                            Ver Estadísticas
                        </button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="static/img/doctor2.png" class="d-block w-100" alt="Doctor 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Dra. María Sánchez</h5>
                        <p>Cirujana pediátrica altamente capacitada, conocida por su enfoque compasivo y habilidades quirúrgicas excepcionales. Ha salvado numerosas vidas infantiles en situaciones críticas.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            Ver Estadísticas
                        </button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="static/img/doctor3.png" class="d-block w-100" alt="Doctor 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5> Dr. Alejandro González</h5>
                        <p>Psiquiatra especializado en trastornos de ansiedad y depresión. Combina terapias innovadoras con un enfoque humano, ayudando a sus pacientes a alcanzar una mejor calidad de vida.
                        </p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                            Ver Estadísticas
                        </button>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>

        <!-- Modales -->
        <!-- Modal 1 -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Estadísticas del Doctor 1</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Precisión:</strong> Alta</p>
                                    <p><strong>Experiencia:</strong> Más de 10 años</p>
                                    <p><strong>Especialidad:</strong> Cardiología</p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Calificación:</strong> 4.5 / 5</p>
                                    <p><strong>Horario:</strong> Lunes a Viernes, 8am - 5pm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 2 -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel2">Estadísticas del Doctor 2</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Precisión:</strong> Media</p>
                                    <p><strong>Experiencia:</strong> Más de 15 años</p>
                                    <p><strong>Especialidad:</strong> Neurología</p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Calificación:</strong> 4.8 / 5</p>
                                    <p><strong>Horario:</strong> Lunes a Sábado, 9am - 6pm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 3 -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel3">Estadísticas del Doctor 3</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Precisión:</strong> Alta</p>
                                    <p><strong>Experiencia:</strong> Más de 12 años</p>
                                    <p><strong>Especialidad:</strong> Pediatría</p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Calificación:</strong> 4.6 / 5</p>
                                    <p><strong>Horario:</strong> Martes a Viernes, 10am - 7pm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS y Popper.js -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-..." crossorigin="anonymous"></script>

        <!-- Activación de los Modales -->
        <script>
            var exampleModal1 = new bootstrap.Modal(document.getElementById('exampleModal1'), {
                keyboard: false
            });

            var exampleModal2 = new bootstrap.Modal(document.getElementById('exampleModal2'), {
                keyboard: false
            });

            var exampleModal3 = new bootstrap.Modal(document.getElementById('exampleModal3'), {
                keyboard: false
            });
        </script>
    </div>

    <script src="static/script.js"></script>
</body>
</html>
