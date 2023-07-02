@extends('layouts.padre')

@section('hijos')
<link rel="stylesheet" href="{{ asset('css/mascotas.css') }}">
<style>
    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      display: none;
      align-items: center;
      justify-content: center;
      z-index: 9999;
    }

    .modal {
      width: 300px;
      background-color: #f1f1f1;
      border-radius: 10px;
      padding: 20px;
      text-align: center;
    }

    .modal h2 {
      margin-top: 0;
    }

    .modal p {
      margin-bottom: 10px;
    }

    .modal button {
      padding: 10px 20px;
      background-color: #eaeaea;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
</style>

<div class="filter-container">
    <label for="raza">Filtrar por Raza:</label>
    <select id="raza" class="filter-select">
        <option value="todos">Todos</option>
        <option value="labrador">Labrador Retriever</option>
        <option value="beagle">Beagle</option>
        <option value="pastor">Pastor Alemán</option>
        <option value="bulldog">Bulldog Francés</option>
    </select>
</div>
<div class="catalog">
    <div class="product-card" data-category="labrador">
        <img src="img/mascota1.jpeg" alt="Mascota 1">
        <h2>Mascota 1</h2>
        <p>Raza: Labrador Retriever</p>
        <p>Edad: 2 años</p>
        <p>Sexo: Macho</p>
        <div class="buttons">
            <button class="btn view-details">Ver detalles</button>
            <a href="#" class="btn">Adoptar</a>
        </div>
    </div>

    <div class="product-card" data-category="beagle">
        <img src="img/mascota8.jpeg" alt="Mascota 2">
        <h2>Mascota 2</h2>
        <p>Raza: Beagle</p>
        <p>Edad: 1 año</p>
        <p>Sexo: Hembra</p>
        <div class="buttons">
            <button class="btn view-details">Ver detalles</button>
            <a href="#" class="btn">Adoptar</a>
        </div>
    </div>

    <div class="product-card" data-category="pastor">
        <img src="img/mascota9.jpeg" alt="Mascota 3">
        <h2>Mascota 3</h2>
        <p>Raza: Pastor Alemán</p>
        <p>Edad: 3 años</p>
        <p>Sexo: Macho</p>
        <div class="buttons">
            <button class="btn view-details">Ver detalles</button>
            <a href="#" class="btn">Adoptar</a>
        </div>
    </div>

    <div class="product-card" data-category="bulldog">
        <img src="img/mascota8.jpeg" alt="Mascota 4">
        <h2>Mascota 4</h2>
        <p>Raza: Bulldog Francés</p>
        <p>Edad: 4 años</p>
        <p>Sexo: Hembra</p>
        <div class="buttons">
            <button class="btn view-details">Ver detalles</button>
            <a href="#" class="btn">Adoptar</a>
        </div>
    </div>

    <div class="product-card" data-category="beagle">
        <img src="img/mascota9.jpeg" alt="Mascota 5">
        <h2>Mascota 5</h2>
        <p>Raza: Beagle</p>
        <p>Edad: 2 años</p>
        <p>Sexo: Macho</p>
        <div class="buttons">
            <button class="btn view-details">Ver detalles</button>
            <a href="#" class="btn">Adoptar</a>
        </div>
    </div>

    <div class="product-card" data-category="labrador">
        <img src="img/mascota8.jpeg" alt="Mascota 6">
        <h2>Mascota 6</h2>
        <p>Raza: Labrador Retriever</p>
        <p>Edad: 3 años</p>
        <p>Sexo: Hembra</p>
        <div class="buttons">
            <button class="btn view-details">Ver detalles</button>
            <a href="#" class="btn">Adoptar</a>
        </div>
    </div>

    <div class="product-card" data-category="pastor">
        <img src="img/mascota1.jpeg" alt="Mascota 7">
        <h2>Mascota 7</h2>
        <p>Raza: Pastor Alemán</p>
        <p>Edad: 2 años</p>
        <p>Sexo: Hembra</p>
        <div class="buttons">
            <button class="btn view-details">Ver detalles</button>
            <a href="#" class="btn">Adoptar</a>
        </div>
    </div>

    <div class="product-card" data-category="bulldog">
        <img src="img/mascota 5.jpg" alt="Mascota 8">
        <h2>Mascota 8</h2>
        <p>Raza: Bulldog Francés</p>
        <p>Edad: 1 año</p>
        <p>Sexo: Macho</p>
        <div class="buttons">
            <button class="btn view-details">Ver detalles</button>
            <a href="#" class="btn">Adoptar</a>
        </div>
    </div>
</div>

<div class="overlay">
  <div class="modal">
    <h2>Detalles de la mascota</h2>
    <p id="modal-name">Nombre:</p>
    <p id="modal-raza">Raza:</p>
    <p id="modal-edad">Edad:</p>
    <p id="modal-sexo">Sexo:</p>
    <button id="modal-close">Cerrar</button>
  </div>
</div>

<script src="{{ asset('javascript/scrips.js') }}"></script>
	<script>
		// Obtener todas las tarjetas de producto
		const productCards = document.querySelectorAll('.product-card');

		// Obtener elementos de la ventana emergente
		const overlay = document.querySelector('.overlay');
		const modal = document.querySelector('.modal');
		const modalName = document.getElementById('modal-name');
		const modalRaza = document.getElementById('modal-raza');
		const modalEdad = document.getElementById('modal-edad');
		const modalSexo = document.getElementById('modal-sexo');
		const modalClose = document.getElementById('modal-close');

		// Función para mostrar la ventana emergente con los detalles de la mascota
		function showDetailsModal(name, raza, edad, sexo) {
			modalName.textContent = 'Nombre: ' + name;
			modalRaza.textContent = 'Raza: ' + raza;
			modalEdad.textContent = 'Edad: ' + edad;
			modalSexo.textContent = 'Sexo: ' + sexo;

			overlay.style.display = 'flex';
		}

		// Función para ocultar la ventana emergente
		function hideDetailsModal() {
			overlay.style.display = 'none';
		}

		// Agregar un controlador de eventos para cada botón "Ver detalles"
		productCards.forEach((card) => {
			const viewDetailsBtn = card.querySelector('.view-details');
			const name = card.querySelector('h2').textContent;
			const raza = card.querySelector('p:nth-child(3)').textContent.replace('Raza: ', '');
			const edad = card.querySelector('p:nth-child(4)').textContent.replace('Edad: ', '');
			const sexo = card.querySelector('p:nth-child(5)').textContent.replace('Sexo: ', '');

			viewDetailsBtn.addEventListener('click', () => {
				showDetailsModal(name, raza, edad, sexo);
			});
		});

		// Agregar un controlador de eventos para el botón de cierre de la ventana emergente
		modalClose.addEventListener('click', () => {
			hideDetailsModal();
		});
	</script>
</body>
</html>


@endsection