<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat - Hospital Morenita</title>
    <link rel="stylesheet" href="static/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Estilos específicos para el chat */
        .chat-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #f2f3f5;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 60vh; /* Altura del contenedor del chat */
            overflow-y: auto; /* Scroll vertical automático */
        }
        .message-container {
            margin-bottom: 15px;
            overflow: hidden;
        }
        .message {
            max-width: 70%;
            padding: 10px 15px;
            border-radius: 10px;
            clear: both;
        }
        .message-sent {
            float: left; /* Alineación a la izquierda para mensajes enviados */
            background-color: #007bff;
            color: white;
            margin-right: 30%; /* Margen derecho para separar del contenedor */
        }
        .message-received {
            float: left; /* Alineación a la izquierda para mensajes recibidos */
            background-color: #f8f9fa;
            color: #333;
            margin-right: 30%; /* Margen derecho para separar del contenedor */
        }
        .time {
            display: block;
            font-size: 12px;
            color: #888;
            margin-top: 5px;
        }
        .input-group {
            position: absolute; /* Posición absoluta para estar al final del contenedor */
            bottom: 20px; /* Distancia desde la parte inferior */
            left: 20px; /* Distancia desde la izquierda */
            right: 20px; /* Distancia desde la derecha */
        }
    </style>
</head>
<body>
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

                </ul>
                <form class="d-flex ms-auto">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
        <div class="container">
            <a class="navbar-brand" href="index.php">Hospital Morenita</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="servicios.php">Servicios</a>
                    </li>
                    <li class="nav-item active">
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
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <h1 class="text-center mb-4">Chat</h1>

        <div class="chat-container" id="chatContainer">
            <!-- Ejemplo de mensajes -->
            <div class="message-container message-received">
                <div class="message">
                    <p>Hola, ¿en qué puedo ayudarte?</p>
                    <span class="time">10:00 AM</span>
                </div>
            </div>
            
            <!-- Formulario de envío de mensaje -->
            <div class="input-group">
                <input type="text" id="messageInput" class="form-control" placeholder="Escribe tu mensaje...">
                <button id="sendMessageBtn" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS y Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
    
    <!-- Script personalizado para enviar mensajes y manejar respuestas -->
    <script>
        // Respuestas predefinidas
        const responses = {
            "hola": "¡Hola! ¿En qué puedo ayudarte?",
            "cita": "Para programar una cita, por favor contáctanos directamente por teléfono.",
            "horarios": "Nuestros horarios de atención son de lunes a viernes de 8:00 AM a 6:00 PM.",
            "especialidades": "Contamos con especialistas en diversas áreas. ¿En qué especialidad estás interesado?",
            "neurologia": "Tenemos doctores que tratan esa area, quieres contactar a alguno??",
            "cardiologia": "Tenemos doctores que tratan esa area, quieres contactar a alguno?",
            "urologia   ": "Tenemos doctores que tratan esa area, quieres contactar a alguno?"
            // Puedes agregar más respuestas aquí según sea necesario
        };

        // Obtener elementos del DOM
        const messageInput = document.getElementById('messageInput');
        const sendMessageBtn = document.getElementById('sendMessageBtn');
        const chatContainer = document.getElementById('chatContainer');

        // Función para agregar un mensaje recibido
        function addReceivedMessage(message) {
            const messageDiv = document.createElement('div');
            messageDiv.classList.add('message-container', 'message-received');
            messageDiv.innerHTML = `
                <div class="message">
                    <p>${message}</p>
                    <span class="time">${getCurrentTime()}</span>
                </div>
            `;
            chatContainer.appendChild(messageDiv);
            scrollToBottom();
        }

        // Función para agregar un mensaje enviado
        function addSentMessage(message) {
            const messageDiv = document.createElement('div');
            messageDiv.classList.add('message-container', 'message-sent');
            messageDiv.innerHTML = `
                <div class="message">
                    <p>${message}</p>
                    <span class="time">${getCurrentTime()}</span>
                </div>
            `;
            chatContainer.appendChild(messageDiv);
            scrollToBottom();
        }

        // Función para obtener la hora actual
        function getCurrentTime() {
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            return `${hours}:${minutes}`;
        }

        // Función para desplazarse hasta el fondo del chat
        function scrollToBottom() {
            chatContainer.scrollTop = chatContainer.scrollHeight;
        }

        // Función para manejar respuestas basadas en el mensaje del usuario
        function handleResponse(message) {
            const lowercaseMessage = message.toLowerCase().trim();
            for (const key in responses) {
                if (lowercaseMessage.includes(key)) {
                    addReceivedMessage(responses[key]);
                    return; // Salir después de encontrar la primera coincidencia
                }
            }
            // Si no se encontró ninguna respuesta predefinida
            addReceivedMessage("Lo siento, no entendí. ¿Puedes ser más específico?");
        }

        // Manejador de evento para enviar mensajes al presionar Enter
        messageInput.addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault(); // Evitar el comportamiento predeterminado del Enter
                const message = messageInput.value.trim();
                if (message !== '') {
                    addSentMessage(message);
                    handleResponse(message);
                    messageInput.value = '';
                }
            }
        });

        // Enfoque inicial en el campo de entrada de mensajes
        messageInput.focus();
    </script>

    <script src="static/script.js"></script>
</body>
</html>
