@extends('layouts.padre')

@section('hijos')

<link rel="stylesheet" href="{{ asset('css/carrito.css') }}">
<script src="{{ asset('javascript/carrito.js') }}"></script>
<section class="contenedor">
    <!-- Contenedor de elementos -->
    <div class="contenedor-items">
        <div class="item">
            <span class="titulo-item">Cortador De Pelo</span>
            <img src="img/producto1.webp" alt="" class="img-item">
            <span class="precio-item">$15.00</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">Cama Nido</span>
            <img src="img/producto2.webp" alt="" class="img-item">
            <span class="precio-item">$25.00</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">Collar Para Perros</span>
            <img src="img/producto3" alt="" class="img-item">
            <span class="precio-item">$35.000</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">Cama Alfombra</span>
            <img src="img/producto4" alt="" class="img-item">
            <span class="precio-item">$18.000</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">Cama Almoada</span>
            <img src="img/producto5" alt="" class="img-item">
            <span class="precio-item">$32.000</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">Cuerda Para Morder</span>
            <img src="img/producto6" alt="" class="img-item">
            <span class="precio-item">$18.000</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">Zapatos Impermeables</span>
            <img src="img/producto7" alt="" class="img-item">
            <span class="precio-item">$54.00</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">Pelota De Tenis</span>
            <img src="img/producto8.jpg" alt="" class="img-item">
            <span class="precio-item">$32.000</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
            <span class="titulo-item">Hueso mordedor - Kong Extreme</span>
            <img src="img/producto9.jpg" alt="" class="img-item">
            <span class="precio-item">$42.800</span>
            <button class="boton-item">Agregar al Carrito</button>
        </div>
    </div>
    <!-- Carrito de Compras -->
    <div class="carrito" id="carrito">
        <div class="header-carrito">
            <h2>Tu Carrito</h2>
        </div>

        <div class="carrito-items">
            <!-- 
            <div class="carrito-item">
                <img src="img/boxengasse.png" width="80px" alt="">
                <div class="carrito-item-detalles">
                    <span class="carrito-item-titulo">Box Engasse</span>
                    <div class="selector-cantidad">
                        <i class="fa-solid fa-minus restar-cantidad"></i>
                        <input type="text" value="1" class="carrito-item-cantidad" disabled>
                        <i class="fa-solid fa-plus sumar-cantidad"></i>
                    </div>
                    <span class="carrito-item-precio">$15.000,00</span>
                </div>
               <span class="btn-eliminar">
                    <i class="fa-solid fa-trash"></i>
               </span>
            </div>
            <div class="carrito-item">
                <img src="img/skinglam.png" width="80px" alt="">
                <div class="carrito-item-detalles">
                    <span class="carrito-item-titulo">Skin Glam</span>
                    <div class="selector-cantidad">
                        <i class="fa-solid fa-minus restar-cantidad"></i>
                        <input type="text" value="3" class="carrito-item-cantidad" disabled>
                        <i class="fa-solid fa-plus sumar-cantidad"></i>
                    </div>
                    <span class="carrito-item-precio">$18.000,00</span>
                </div>
               <button class="btn-eliminar">
                    <i class="fa-solid fa-trash"></i>
               </button>
            </div>
             -->
        </div>
        <div class="carrito-total">
            <div class="fila">
                <strong>Tu Total</strong>
                <span class="carrito-precio-total">
                    $120.000,00
                </span>
            </div>
            <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
        </div>
    </div>
</section>
</body>
</html>

@endsection