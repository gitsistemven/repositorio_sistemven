<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Gunther el chucaro</title>
    @vite(['resources/sass/app.scss','resources/js/app.js','resources/js/fslightbox.js','resources/js/sweetalert2.js','resources/js/main.js','resources/js/mdb.min.js','resources/css/style.css','resources/css/normalize.css','resources/css/all.css','resources/css/mdb.min.css'])
            

</head>
<body>




	<!-- Header -->
	<header class="header full-box">
	    <div class="header-brand text-center full-box">
	        <a href="index.html">
	            <img src="{{ Vite::asset('resources/assets/img/logores.png')}}" alt="logo" class="img-fluid">
	        </a>
	    </div>

        
	    <div class="header-options full-box">
	        <nav class="header-navbar full-box poppins-regular font-weight-bold" >
	            <ul class="list-unstyled full-box">
                    
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Inicio</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Iniciar sesión</a>
                    @endauth
                </div>
            @endif

	            </ul>
	        </nav>
	       
	    </div>
	</header>


	<!-- Content -->
	<div class="banner">
	    <div class="banner-body">
	        <h3 class="text-uppercase">Bienvenido al Restaurante y churrasqueria Gúnther el Chúcaro </h3>
	        <p>Los mejores platillos y la mejor calidad los encuentras aquí</p>
	    </div>
	</div>

	<hr>

	<section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menú</h2>
          <p>Mira nuestro menú</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter=".filter-starters">Parrillas</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{ Vite::asset('resources/assets/img/menu/bife.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Bife</a><span>Bs 45</span>
            </div>
            <div class="menu-ingredients">
              bife de carne vacuno desgrasado y con hueso
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img  src="{{ Vite::asset('resources/assets/img/menu/matambre.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Matambre</a><span>Bs 50</span>
            </div>
            <div class="menu-ingredients">
              Matambre, leche y condimentos
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{ Vite::asset('resources/assets/img/menu/tapa de asado.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Tapa de asado</a><span>Bs 50</span>
            </div>
            <div class="menu-ingredients">
            Tapa de asado, cebolla, puerros, ajo, huevos duros, tapa de empanadas,
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="{{ Vite::asset('resources/assets/img/menu/tira.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Tira al vino</a><span>Bs 60</span>
            </div>
            <div class="menu-ingredients">
              
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="{{ Vite::asset('resources/assets/img/menu/cuadril.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Cuadril</a><span>Bs 45</span>
            </div>
            <div class="menu-ingredients">
              Rissito, Manteca, cebolla, paprika, ajo, oregano, pimienta, queso parmesano, romero, tira de asado, vino tinto, arroz carnaroli
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{ Vite::asset('resources/assets/img/menu/pollo.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Pollo</a><span>Bs 30</span>
            </div>
            <div class="menu-ingredients">
              Pollo, sazon, ajo, cilantro, pimienta, oregado, comino, 
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="{{ Vite::asset('resources/assets/img/menu/chorizo.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Chorizo</a><span>Bs 10</span>
            </div>
            <div class="menu-ingredients">
              Chorizo acompañado con salasa criolla.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="{{ Vite::asset('resources/assets/img/menu/tripa.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Tripa</a><span>$ 45</span>
            </div>
            <div class="menu-ingredients">
             Tripa gorda, limones
            </div>
          </div>

         <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter=".filter-starters">Vinos</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
				<img src="{{ Vite::asset('resources/assets/img/menu/casillero del diablo.jpg')}}" class="menu-img" alt="">
				<div class="menu-content">
				<a href="#">Casillero del diablo</a><span>Bs 120</span>
				</div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
				<img  src="{{ Vite::asset('resources/assets/img/menu/aspero.jpg')}}" class="menu-img" alt="">
				<div class="menu-content">
				<a href="#">Aspero Tinto</a><span>Bs 40</span>
				</div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
				<img src="{{ Vite::asset('resources/assets/img/menu/semi dulce.jpg')}}" class="menu-img" alt="">
				<div class="menu-content">
				<a href="#">Semi dulce</a><span>Bs 40</span>
				</div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
				<img src="{{ Vite::asset('resources/assets/img/menu/blanco.jpg')}}" class="menu-img" alt="">
				<div class="menu-content">
				<a href="#">Vino blanco</a><span>Bs 40</span>
				</div>
          </div>

		  <div class="col-lg-6 menu-item filter-salads">
				<img src="{{ Vite::asset('resources/assets/img/menu/dulce tinto.jpg')}}" class="menu-img" alt="">
				<div class="menu-content">
				<a href="#">Dulce tinto</a><span>Bs 40</span>
				</div>
          </div>


        </div>

      </div>
    </section>

	<hr>

	<div class="container container-web-page">
	    <div class="row justify-content-md-center">
	        <div class="w-100"></div>
	        <div class="col-12 col-md-6">
	            <h3 class="text-center text-uppercase poppins-regular font-weight-bold">Contactanos al</h3>
	            <p class="text-justify">
				 -------------------------------        70477181        ---------                  71818620        -------------------------------
	            </p>
	        </div>
	    </div>
	</div>

	<!-- Footer -->
	<footer class="footer">
	    <div class="container">
	        <div class="row">
	            <div class="col-12 col-md-4">
	                <ul class="list-unstyled" >
	                    <li><h5 class="font-weight-bold" ><i class="far fa-copyright"></i> Moreilia Mamni 2022</h5></li>
	                    <li> Todos los derechos reservados </li>
	                </ul>
	            </div>
	            <div class="col-12 col-md-4">
	                <ul class="list-unstyled" >
	                    <li><h5 class="font-weight-bold" >Potosí</h5></li>
	                    <li><i class="fas fa-map-marker-alt fa-fw"></i>Potosi-Bolivia</li>
	                </ul>
	            </div>
	            <div class="col-12 col-md-4">
	                <ul class="list-unstyled" >
	                    <li><h5 class="font-weight-bold" >Siguenos en:</h5> </li>
	                    <li>
	                        <a href="https://www.facebook.com/guntheralberto.rojashernandez" class="footer-link" target="_blank" >
	                            <i class="fab fa-facebook fa-fw"></i> Facebook
	                        </a>
	                    </li>
	                </ul>
	            </div>
	        </div>
	    </div>
	</footer>


	<!-- MDBootstrap V5 -->
	<!--<script src="./js/mdb.min.js" ></script>-->

	<!-- General scripts -->
	<!--<script src="./js/main.js" ></script>-->
</body>
</html>