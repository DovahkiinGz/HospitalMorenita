<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Hospital Morenita</title>
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
        <a class="navbar-brand" href="#">Tu Hospital</a>
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

            <!-- Menú desplegable para el carrito de compras -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCart" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Carrito
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownCart" id="cart-dropdown-menu">
                        <!-- Los elementos del carrito se añaden dinámicamente aquí -->
                        <li class="dropdown-header">Productos Agregados:</li>
                        <!-- Aquí se añadirán dinámicamente los productos -->
                        <li><hr class="dropdown-divider"></li>
                        <li class="dropdown-item"><a href="#">Total: <span id="cart-total">$0.00</span></a></li>
                        <li><a class="dropdown-item" href="#">Proceder al Pago</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <div class="container mt-4">
        <h2 class="mb-4">Productos Disponibles</h2>

        <div class="row">
            <!-- Card de Salbutamol -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="static/img/salbutamol.PNG" class="card-img-top" alt="Salbutamol">
                    <div class="card-body">
                        <h5 class="card-title">Salbutamol</h5>
                        <p class="card-text">Medicamento utilizado para tratar el asma y otras afecciones respiratorias.</p>
                        <p class="card-text"><strong>Precio: $50</strong></p>
                        <a href="agregar_carrito.php?id=1" class="btn btn-primary">Agregar al Carrito</a>
                    </div>
                </div>
            </div>

            <!-- Card de Paracetamol -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="static/img/paracetamol.PNG" class="card-img-top" alt="Paracetamol">
                    <div class="card-body">
                        <h5 class="card-title">Paracetamol</h5>
                        <p class="card-text">Analgésico y antipirético utilizado para aliviar dolores leves y reducir la fiebre.</p>
                        <p class="card-text"><strong>Precio: $20</strong></p>
                        <a href="agregar_carrito.php?id=2" class="btn btn-primary">Agregar al Carrito</a>
                    </div>
                </div>
            </div>

            <!-- Card de Prednisona -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="static/img/prednisona.PNG" class="card-img-top" alt="Prednisona">
                    <div class="card-body">
                        <h5 class="card-title">Prednisona</h5>
                        <p class="card-text">Corticosteroide utilizado para tratar diversas condiciones inflamatorias y autoinmunes.</p>
                        <p class="card-text"><strong>Precio: $30</strong></p>
                        <a href="agregar_carrito.php?id=3" class="btn btn-primary">Agregar al Carrito</a>
                    </div>
                </div>
            </div>

            <!-- Card de Ibuprofeno -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="static/img/ibuprofeno.PNG" class="card-img-top" alt="Ibuprofeno">
                    <div class="card-body">
                        <h5 class="card-title">Ibuprofeno</h5>
                        <p class="card-text">Analgésico y antiinflamatorio no esteroideo (AINE) utilizado para aliviar el dolor y reducir la inflamación.</p>
                        <p class="card-text"><strong>Precio: $25</strong></p>
                        <a href="agregar_carrito.php?id=4" class="btn btn-primary">Agregar al Carrito</a>
                    </div>
                </div>
            </div>

            <!-- Card de Omeprazol -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="static/img/omeprazol.PNG" class="card-img-top" alt="Omeprazol">
                    <div class="card-body">
                        <h5 class="card-title">Omeprazol</h5>
                        <p class="card-text">Inhibidor de la bomba de protones utilizado para tratar úlceras estomacales y reflujo gastroesofágico.</p>
                        <p class="card-text"><strong>Precio: $15</strong></p>
                        <a href="agregar_carrito.php?id=5" class="btn btn-primary">Agregar al Carrito</a>
                    </div>
                </div>
            </div>

            <!-- Card de Amoxicilina -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="static/img/amoxicilina.PNG" class="card-img-top" alt="Amoxicilina">
                    <div class="card-body">
                        <h5 class="card-title">Amoxicilina</h5>
                        <p class="card-text">Antibiótico de amplio espectro utilizado para tratar infecciones bacterianas.</p>
                        <p class="card-text"><strong>Precio: $35</strong></p>
                        <a href="agregar_carrito.php?id=6" class="btn btn-primary">Agregar al Carrito</a>
                    </div>
                </div>
            </div>

            <!-- Card de Simvastatina -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="static/img/simvastatina.PNG" class="card-img-top" alt="Simvastatina">
                    <div class="card-body">
                        <h5 class="card-title">Simvastatina</h5>
                        <p class="card-text">Estatina utilizada para reducir los niveles de colesterol y triglicéridos en la sangre.</p>
                        <p class="card-text"><strong>Precio: $40</strong></p>
                        <a href="agregar_carrito.php?id=7" class="btn btn-primary">Agregar al Carrito</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="static/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
