<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="static/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>
<body>
    
    <?php
    include_once ('./Clases/CConexion.php');
    $consulta = CConexion::conexionBD();
    ?>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Hospital Morenita</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar personalizado -->
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
                            <button class="btn-toggle" onclick="toggleDarkMode()" >Activar Modo Oscuro</button>
                        </li>

                </ul>
           
        </div>
    </div>
</nav>

    </header>

    <br>
    <br>
    
    <div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3"> <!-- Centra el formulario en el medio con un ancho medio -->
            <form action="./Clases/CPacientes.php" method="POST">
                <div class="mb-3">
                    <label for="paraCodigo" class="form-label">Código:</label>
                    <input type="text" class="form-control" id="paraCodigo" name="paraCodigo" readonly>
                </div>
                <div class="mb-3">
                    <label for="paraRut" class="form-label">Rut:</label>
                    <input type="text" class="form-control" id="paraRut" name="paraRut">
                </div>
                <div class="mb-3">
                    <label for="paraNombre" class="form-label">Nombres:</label>
                    <input type="text" class="form-control" id="paraNombre" name="paraNombre">
                </div>
                <div class="mb-3">
                    <label for="paraApellido" class="form-label">Apellidos:</label>
                    <input type="text" class="form-control" id="paraApellido" name="paraApellido">
                </div>
                <div class="mb-3">
                    <label for="paraEdad" class="form-label">Edad:</label>
                    <input type="text" class="form-control" id="paraEdad" name="paraEdad">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" value='Guardar' name="insertar" id="insertar">
                    <input type="submit" class="btn btn-warning" value='Modificar' name="modificar" id="modificar">
                    <input type="submit" class="btn btn-danger" value='Eliminar' name="eliminar" id="eliminar">
                </div>
            </form>
        </div>
    </div>
</div>


        <br>
        <br>

    Lista de registros

    <div class="container">
    <div class="row">
        <div class="col-8 offset-3"> <!-- Centra la tabla en el medio con un ancho del 50% -->
            <table id="miTabla" class="table table-striped">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>DNI</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Edad</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once('./Clases/CPacientes.php');
                    $consulta = CPacientes::mostrarTotalDePacientes();
                    foreach ($consulta as $fila) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($fila['id']) . "</td>";
                        echo "<td>" . htmlspecialchars($fila['rut']) . "</td>";
                        echo "<td>" . htmlspecialchars($fila['nombre']) . "</td>";
                        echo "<td>" . htmlspecialchars($fila['apellido']) . "</td>";
                        echo "<td>" . htmlspecialchars($fila['edad']) . "</td>";
                        echo "<td><input type=\"button\" value=\"Seleccionar\" onClick=\"Seleccionar()\"></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

    <script src="static/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
