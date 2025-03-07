// Array para almacenar los productos en el carrito
let carrito = [];

// Función para agregar un producto al carrito
function agregarAlCarrito(elemento) {
    // Obtener los datos del producto
    const servicio = elemento.getAttribute("data-servicio");
    const precio = elemento.parentElement.querySelector(".price").textContent;

    // Crear un objeto producto
    const producto = { servicio, precio };

    // Agregar el producto al carrito
    carrito.push(producto);

    // Mostrar un mensaje de confirmación
    alert(`${servicio} ha sido agregado al carrito.`);

    // Actualizar el carrito visualmente
    actualizarCarrito();
}

// Función para mostrar el carrito en el modal
function mostrarCarrito() {
    const modal = document.getElementById("modalCarrito");
    const descripcionModal = document.getElementById("descripcionModal");

    // Limpiar el contenido previo
    descripcionModal.innerHTML = "";

    if (carrito.length === 0) {
        descripcionModal.innerHTML = "<p>El carrito está vacío.</p>";
    } else {
        // Generar una lista de los productos en el carrito
        carrito.forEach((producto, index) => {
            const item = document.createElement("div");
            item.classList.add("producto-carrito");
            item.innerHTML = `
                <p>${producto.servicio} - ${producto.precio}</p>
                <button onclick="eliminarDelCarrito(${index})">Eliminar</button>
            `;
            descripcionModal.appendChild(item);
        });
    }

    // Calcular el total del carrito
    const total = carrito.reduce((acc, item) => {
        return acc + parseFloat(item.precio.replace("$", "").replace("MXN", "").trim());
    }, 0);

    // Mostrar el total en el modal
    const totalElement = document.createElement("p");
    totalElement.textContent = `Total: $${total.toFixed(2)} MXN`;
    descripcionModal.appendChild(totalElement);

    // Mostrar el modal
    modal.style.display = "block";
}

// Función para cerrar el modal
function cerrarModal() {
    const modal = document.getElementById("modalCarrito");
    modal.style.display = "none";
}

// Función para eliminar un producto del carrito
function eliminarDelCarrito(index) {
    // Eliminar el producto del array
    carrito.splice(index, 1);

    // Actualizar el carrito visualmente
    actualizarCarrito();
    mostrarCarrito();
}

// Función para actualizar los datos del formulario al guardar el carrito
function actualizarCarrito() {
    const productosInput = document.getElementById("productosInput");
    const totalInput = document.getElementById("totalInput");

    // Generar la lista de productos y calcular el total
    const listaProductos = carrito.map(item => item.servicio).join(", ");
    const total = carrito.reduce((acc, item) => {
        return acc + parseFloat(item.precio.replace("$", "").replace("MXN", "").trim());
    }, 0);

    // Actualizar los inputs ocultos
    productosInput.value = listaProductos;
    totalInput.value = total.toFixed(2);
}
