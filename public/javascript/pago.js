window.addEventListener('DOMContentLoaded', () => {
    const carritoLista = document.getElementById('carrito-lista');
    const carritoTotal = document.getElementById('carrito-total');
  
    // Obtener los datos del carrito almacenados en el almacenamiento local
    const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    const total = parseFloat(localStorage.getItem('total')) || 0;
  
    // Mostrar los productos del carrito en la página de método de pago
    carrito.forEach(item => {
      const li = document.createElement('li');
      li.textContent = `${item.nombre} - Cantidad: ${item.cantidad} - $${(item.precio * item.cantidad).toFixed(2)}`;
      carritoLista.appendChild(li);
    });
  
    carritoTotal.textContent = `Total: $${total.toFixed(2)}`;
  });
  
  function procesarPago() {
    const metodoPago = document.getElementById('metodo-pago').value;
  
    // Aquí puedes agregar la lógica para procesar el pago según el método seleccionado
  
    alert(`Pago procesado con éxito mediante ${metodoPago}`);
  }
  function procesarPago() {
    // Obtener los datos del formulario
    var metodoPago = document.getElementById('metodo-pago').value;
    var nombreTarjeta = document.getElementById('nombre-tarjeta').value;
    var numeroTarjeta = document.getElementById('numero-tarjeta').value;
    var vencimientoTarjeta = document.getElementById('vencimiento-tarjeta').value;
    var cvvTarjeta = document.getElementById('cvv-tarjeta').value;
    var nombreContacto = document.getElementById('nombre-contacto').value;
    var emailContacto = document.getElementById('email-contacto').value;
    var direccionContacto = document.getElementById('direccion-contacto').value;
    var metodoEnvio = document.getElementById('metodo-envio').value;
    var notasEnvio = document.getElementById('notas-envio').value;
  
    // Crear el objeto de resumen de compra
    var resumenCompra = {
      metodoPago: metodoPago,
      nombreTarjeta: nombreTarjeta,
      numeroTarjeta: numeroTarjeta,
      vencimientoTarjeta: vencimientoTarjeta,
      cvvTarjeta: cvvTarjeta,
      nombreContacto: nombreContacto,
      emailContacto: emailContacto,
      direccionContacto: direccionContacto,
      metodoEnvio: metodoEnvio,
      notasEnvio: notasEnvio
    };
  
    // Mostrar el resumen de compra en la consola (puedes modificar esto para mostrarlo de otra manera)
    console.log('Resumen de Compra:');
    console.log(resumenCompra);
  
    // Redirigir al usuario a la página de confirmación de compra (puedes cambiar la URL según tus necesidades)
    window.location.href = 'confirmacion.html';
  }
  