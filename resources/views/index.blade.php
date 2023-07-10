@extends('layouts.nuevo') <!-- Convocamos al layout 'Nuevo' -->

@section('contenido') <!-- Aqui etiquetamos que todo lo que sigue es contenido -->

<!-- Carrusel Inicio -->
<div id="carouselExampleFade" class="carousel slide carousel-fade">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/index/foto-carrusel-3.jpeg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/index/foto-carrusel-2.jpeg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/index/foto-carrusel-1.jpeg')}}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!-- Carrusel fin -->

<!-- Quienes somos  -->
<div class="container py-5">
    <div class="row py-5">
        <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
            <h4 class="text-secondary mb-3">Quienes Somos </h4>
            <h1 class="display-4 mb-4"><span class="text-1">Refugio </span> de <span class="text-2">Mascotas</span></h1>
            <h5 class="text-muted mb-3">Nos enfocamos en brindar información sobre la organización que se dedica a facilitar y promover la adopción responsable de animales. También puede destacar logros y reconocimientos, junto con testimonios de adoptantes satisfechos. El objetivo principal de esta sección es transmitir la dedicación de la organización hacia el bienestar animal y promover la adopción responsable como una forma de brindar un hogar amoroso a los animales que han sido abandonados o rescatados.</h5>
            
        </div>
        <div class="col-lg-5">
            <div class="row px-3">
                <div class="col-12 p-0">
                    <img class="img-fluid w-100" src="{{ asset('img/index/img-quienes-somos-1.jpeg')}}" alt="">
                </div>
                <div class="col-6 p-0">
                    <img class="img-fluid w-100 ;" src="{{ asset('img/index/img-quienes-somos-2.jpeg')}}" alt="">
                </div>
                <div class="col-6 p-0">
                    <img class="img-fluid w-100" src="{{ asset('img/index/img-quienes-somos-3.jpeg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- quienes somos fin -->
<!--Medicos -->
<section class="service_section">
  <div class="container-f">
    <div class="row">
      <div class="col-md-6 offset-md-2">
        <h2 class="custom_heading">
          Our <span>Services</span>
        </h2>
        <div class="container layout_padding2">
          <div class="row">
            <div class="col-md-4">
              <div class="img_box">
                <img src="{{ asset('img/index/s-1.png')}}" alt="">
              </div>
              <div class="detail_box">
                <h6>
                  Pet Care
                </h6>
                <p>
                  onsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                  enim ad minim veniam, quis nostrud exe
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="img_box">
                <img src="{{ asset('img/index/s-2.png')}}" alt="">
              </div>
              <div class="detail_box">
                <h6>
                  Pet Hotel
                </h6>
                <p>
                  onsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                  enim ad minim veniam, quis nostrud exe
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="img_box">
                <img src="{{ asset('img/index/s-3.png')}}" alt="">
              </div>
              <div class="detail_box">
                <h6>
                  Emergency
                </h6>
                <p>
                  onsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                  enim ad minim veniam, quis nostrud exe
                </p>
              </div>
            </div>
          </div>
        </div>
        <div>
          <a href="">
            Read More
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <img src="{{ asset('img/index/tool.png')}}" alt="" class="w-100">
      </div>
    </div>
  </div>
</section>
<br>
<br>
<!--Medicos fin-->

<!--Carrito de compras-->
<h6 class="container-text-carrito">Carrito de Compras</h6>
<div class="vista-carrito">
    <div class="card-compras" style="width: 18rem;">
        <img src="{{ asset('img/index/Cama-para-mascotas.webp')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Cama de mascotas</h5>
          <p class="card-text">Es un accesorio suave y acolchado diseñado para brindar comodidad y descanso a las mascotas.</p>
          
        </div>
      </div>
      <div class="card-compras" style="width: 18rem;">
        <img src="{{ asset('img/index/Mesa-para-gatos.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Mesa de gatos</h5>
          <p class="card-text">Es un accesorio para que las mascotas se puedan alimentar.</p>
          
        </div>
      </div>
      <div class="card-compras" style="width: 18rem;">
        <img src="{{ asset('img/index/Mochila-trasportadora.jpeg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Mochila de tranporte</h5>
          <p class="card-text">Es un accesorio para transportar a tu mascota.</p>
          
        </div>
      </div>    
</div>
<a href="productos"><button class="btn-compras" type="button">Ir a comprar</button></a>
</div>

<!--Carrito fin -->
<br><br><br>
<!--team 2-->
<div class="container-titulo-team">
<h1 class="text-equipo-titulo">Team - Refugio de Patitas</h1>
</div>
<div class="container">
    <input type="radio" name="dot" id="one">
    <input type="radio" name="dot" id="two">
    <div class="main-card">
      <div class="cards">
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="./imagenes/index/logo.png" alt="">
           </div>
           <div class="details">
             <div class="name">Sebastian Salvatierra Cisneros</div>
             <div class="job">Front End</div>
           </div>
           <div class="media-icons">
             <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
             <a href="https://twitter.com/i/flow/login?redirect_after_login=%2F"><i class="fab fa-twitter"></i></a>
             <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
             <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="./imagenes/perros/2poruno.PNG" alt="">
           </div>
           <div class="details">
             <div class="name">Brian Saavedra </div>
             <div class="job">Front End</div>
           </div>
           <div class="media-icons">
            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/i/flow/login?redirect_after_login=%2F"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/img3.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Harold Cutti</div>
             <div class="job">Informe</div>
           </div>
           <div class="media-icons">
            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/i/flow/login?redirect_after_login=%2F"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
           </div>
         </div>
        </div>
      </div>
      <div class="cards">
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/img4.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Piero Quiroz Coronel</div>
             <div class="job">Back End</div>
           </div>
           <div class="media-icons">
            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/i/flow/login?redirect_after_login=%2F"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/img5.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Diego Moreno</div>
             <div class="job">Maquetacion</div>
           </div>
           <div class="media-icons">
            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/i/flow/login?redirect_after_login=%2F"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="./imagenes/index/Blue Label.jpeg" alt="">
           </div>
           <div class="details">
             <div class="name">Blue Label</div>
             <div class="job">Full Stack</div>
           </div>
           <div class="media-icons">
             <a href="#"><i class="fab fa-facebook-f"></i></a>
             <a href="#"><i class="fab fa-twitter"></i></a>
             <a href="#"><i class="fab fa-instagram"></i></a>
             <a href="#"><i class="fab fa-youtube"></i></a>
           </div>
         </div>
        </div>
      </div>
    </div>
    <div class="button">
      <label for="one" class=" active one"></label>
      <label for="two" class="two"></label>
    </div>
  </div>
<!--team2 fin-->
@endsection