function Seleccionar() { 
    var table = document.getElementById("miTabla");
    for (var i = 1; i < table.rows.length; i++) {
        table.rows[i].onclick = function() {
            document.getElementById('paraCodigo').value = this.cells[0].innerHTML;
            document.getElementById('paraRut').value = this.cells[1].innerHTML;
            document.getElementById('paraNombre').value = this.cells[2].innerHTML;
            document.getElementById('paraApellido').value = this.cells[3].innerHTML;
            document.getElementById('paraEdad').value = this.cells[4].innerHTML;
        };
    }
}
document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const name = this.getAttribute('data-name');
            const price = parseFloat(this.getAttribute('data-price'));
            const img = this.getAttribute('data-img');

            addToCart(name, price, img);
        });
    });

    function addToCart(name, price, img) {
        const cartItem = {
            name: name,
            price: price,
            img: img
        };

        // Asumiendo que tienes un array para almacenar los items del carrito
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        cart.push(cartItem);
        localStorage.setItem('cart', JSON.stringify(cart));

        // Actualizar visualmente el menú desplegable del carrito
        updateCartDropdown(cartItem);
    }

    function updateCartDropdown(item) {
        const dropdownMenu = document.getElementById('cart-dropdown-menu');
        const listItem = document.createElement('li');
        listItem.classList.add('dropdown-item');

        listItem.innerHTML = `
            <div class="row align-items-center">
                <div class="col-auto">
                    <img src="${item.img}" alt="${item.name}" class="img-thumbnail" style="width: 40px;">
                </div>
                <div class="col">
                    ${item.name}
                </div>
                <div class="col-auto">
                    $${item.price.toFixed(2)}
                </div>
            </div>
        `;

        dropdownMenu.appendChild(listItem);

        // Actualizar el total y otros elementos del carrito si es necesario
        updateCartSummary();
    }

    function updateCartSummary() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const subtotal = cart.reduce((total, item) => total + item.price, 0);

        const totalElement = document.getElementById('cart-total');
        totalElement.textContent = `$${subtotal.toFixed(2)}`;
    }
});

    // Función para alternar el modo oscuro
    function toggleDarkMode() {
        const body = document.body;
        body.classList.toggle('dark-mode');

        // Cambiar el estado del botón
        const btnToggle = document.querySelector('.btn-toggle');
        btnToggle.classList.toggle('active');

        // Guardar el estado en localStorage
        if (body.classList.contains('dark-mode')) {
            localStorage.setItem('darkModeEnabled', 'true');
        } else {
            localStorage.setItem('darkModeEnabled', 'false');
        }
    }

    // Verificar el estado guardado en localStorage al cargar la página
    document.addEventListener('DOMContentLoaded', function() {
        const darkModeEnabled = localStorage.getItem('darkModeEnabled');

        // Aplicar modo oscuro si estaba activo
        if (darkModeEnabled === 'true') {
            document.body.classList.add('dark-mode');
            document.querySelector('.btn-toggle').classList.add('active');
        }
    });

    $(document).ready(function() {
        // Manejar el envío del formulario de búsqueda
        $('#formBuscar').submit(function(event) {
            event.preventDefault(); // Evitar el comportamiento predeterminado del formulario
    
            var searchTerm = $('#inputBuscar').val(); // Obtener el término de búsqueda
    
            // Realizar una petición AJAX para buscar el medicamento
            $.ajax({
                url: 'buscar_medicamento.php', // URL del script PHP que maneja la búsqueda del medicamento
                type: 'GET',
                data: { nombre: searchTerm }, // Enviar el término de búsqueda como parámetro GET
                dataType: 'html',
                success: function(data) {
                    // Mostrar los detalles del primer medicamento encontrado
                    $('#contenidoMedicamento').html(data);
                },
                error: function() {
                    alert('Error al buscar medicamento.');
                }
            });
        });
    });
    