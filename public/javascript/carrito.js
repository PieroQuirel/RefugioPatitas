let carrito = [];
let total = 0;

function agregarAlCarrito(id, nombre, precio, imagen) {
  const productoExistente = carrito.find(item => item.id === id);
  if (productoExistente) {
    productoExistente.cantidad++;
  } else {
    carrito.push({ id, nombre, precio, cantidad: 1, imagen }); // Agregamos el atributo imagen al objeto del carrito
  }

  total += precio;
  actualizarCarrito();
}

function eliminarDelCarrito(id) {
  const productoIndex = carrito.findIndex(item => item.id === id);
  if (productoIndex !== -1) {
    const producto = carrito[productoIndex];
    total -= producto.precio * producto.cantidad;
    carrito.splice(productoIndex, 1);
    actualizarCarrito();
  }
}

function vaciarCarrito() {
  carrito = [];
  total = 0;
  actualizarCarrito();
}
function actualizarCarrito() {
  const carritoLista = document.getElementById('carrito-lista');
  const carritoTotal = document.getElementById('carrito-total');
  const carritoCantidad = document.getElementById('carrito-cantidad');
  carritoLista.innerHTML = '';

  carrito.forEach(item => {
    const li = document.createElement('li');

    const img = document.createElement('img');
    img.src = item.imagen;
    img.alt = item.nombre;
    li.appendChild(img);

    const nombre = document.createElement('span');
    nombre.textContent = item.nombre;
    li.appendChild(nombre);

    const cantidad = document.createElement('span');
    cantidad.textContent = `Cantidad: ${item.cantidad}`;
    li.appendChild(cantidad);

    const precio = document.createElement('span');
    precio.textContent = `$${(item.precio * item.cantidad).toFixed(2)}`;
    li.appendChild(precio);

    const botonEliminar = document.createElement('button');
    botonEliminar.textContent = 'Eliminar';
    botonEliminar.onclick = () => eliminarDelCarrito(item.id);
    li.appendChild(botonEliminar);

    carritoLista.appendChild(li);
  });

  carritoTotal.textContent = `Total: $${total.toFixed(2)}`;
  carritoCantidad.textContent = carrito.length;
}

function mostrarCarrito() {
  const carritoDiv = document.getElementById('carrito');
  if (carritoDiv.style.display === 'none') {
    carritoDiv.style.display = 'block';
  } else {
    carritoDiv.style.display = 'none';
  }
}
