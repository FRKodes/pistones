@extends('app')

@section('titlePage', 'Cocina')

@section('content')
	<div class="container-fluid inner-banner cocina">
		<div class="inner-title"><img src="images/cocina_.svg" alt="Cocina Pistones Garage"></div>
	</div>

	<div class="container adictiva">
		<div class="col-sm-12 back_naranja">
			<div class="text-container text-center back_naranja">
				<h1><img src="images/comida_adictiva_negro_new.svg" alt="cuidado comida altamente adictiva, en Pistones Garage"></h1>
			</div>
		</div>
		<div class="col-sm-12 back_naranja last">
			<p class="col-md-8 col-md-offset-2 text-center">En Pistones® el sabor sí importa, por eso fusionamos la clásica cocina americana con nuestro toque especial. Burgers hechas con pan artesanal y carne 100% sonorense, alitas en su punto, listas para que elijas tu salsa favorita ¿picante?, ¿BBQ?</p>
		</div>
	</div>

	<div class="container text-center">
		<img class="estrellas" src="images/estrellas_taller_new.svg" alt="conoce algunas estrellas del taller">
	</div>

	<div class="container">
		<div class="col-sm-6 col-md-5 back-black">
			<div class="text-container p-top-20 text-center">
				<img class="burger-love" src="images/amor_burger_new.svg" alt="burger love">
				<p class="text-left">
					Somos el Taller de la comida altemente adictiva y los drinks perfectamente calibrados, fusionamos nuestro propio estilo y la clásica comida americana. <br><br>
					Nunca habías probado una burger tan increíble como la que se hace en el Taller, hechas con exqusito pan artesanal horneado al día, carne a la parrilla 100% sonorense de la mejor calidad e ingredientes siempre frescos y elegidos cuidadosamente por los mecánicos de cocina.
				</p>
			</div>
		</div>
		<div class="col-sm-6 col-md-7">
			<div class="product-slider">
				<div class="item"><img src="images/cocina-burger-love-03.jpg" alt="pistones garage cocina burger love 03"></div>
				<div class="item"><img src="images/cocina-burger-love-01.jpg" alt="pistones garage cocina burger love 01"></div>
				<div class="item"><img src="images/cocina_amor_burger_lucy.jpg" alt="pistones garage cocina amor burger lucy"></div>
				<div class="item"><img src="images/cocina_amor_burger_wing_tornado.jpg" alt="pistones garage cocina amor burger wing tornado"></div>
			</div>
		</div>
	</div>

	<div class="container botana">
		<div class="col-sm-6 col-md-5">
			<div class="text-container black">
				<h2 class="chunk naranja botana">LA BOTANA</h2>
				<p>Nuestras malteadas son el complemento perfecto para la hora de la comida y a toda hora. Aquí tenemos wings jugosas, grandes y carnosas, solo falta que elijas tu salsa. Para cerrar ¡con todo! la originalidad de nuestros postres te sorprenderá de una dulce manera.</p>
			</div>
		</div>
		<div class="col-sm-6 col-md-7">
			<div class="product-slider-2">
				<div class="item"><img src="images/cocina-la-botana-01.jpg" alt="cocina la botana 01"></div>
				<div class="item"><img src="images/cocina-la-botana-02.jpg" alt="cocina la botana 02"></div>
				<div class="item"><img src="images/cocina-la-botana-03.jpg" alt="cocina la botana 03"></div>
				<div class="item"><img src="images/cocina_botana_cheesy_balls.jpg" alt="cocina la botana cheesy balls"></div>
			</div>
		</div>
	</div>

	<div class="container p-up-down-40px">
		<div class="col-sm-6 col-md-5 back-black">
			<div class="text-container">
				<h2 class="chunk naranja antoja">¿SE TE ANTOJA<br><span>ALGO MÁS?</span></h2>
				<p>
					{{-- Pero la comida no se disfrutaría igual sin una bebida. Las cervezas más heladas y una gran variedad de bebidas preparadas con el toque del Taller. <br><br>
					El Taller tiene también para ti los postres más originales para que tu experiencia en PISTONES tenga un dulce final. <br><br>
					Perfecto para disfrutarse en familia o amigos, sin importar la hora del día, nuestro menú tiene un platillo que se convertirá en tu favorito. --}}
					Pero la comida no se disfrutaría igual sin un buen drink. Las cervezas más heladas, micheladas y shots calibrados con el toque del Taller garantizan que tu experiencia en PISTONES® sea memorable.
				</p>
			</div>
		</div>
		<div class="col-sm-6 col-md-7">
			<div class="product-slider-3">
				<div class="item"><img src="images/algomas_04_brownie_f1.jpg" alt="algomas brownie_f1"></div>
				<div class="item"><img src="images/cocina-algo-mas-04.jpg" alt="cocina algo mas 04"></div>
				<div class="item"><img src="images/algomas_01_arrachera.jpg" alt="algomas arrachera"></div>
				<div class="item"><img src="images/cocina-algo-mas-05.jpg" alt="cocina algo mas 05"></div>
				<div class="item"><img src="images/algomas_02_ensalada.jpg" alt="algomas ensalada"></div>
				<div class="item"><img src="images/cocina-algo-mas-06.jpg" alt="cocina algo mas 06"></div>
				<div class="item"><img src="images/algomas_03_malteada.jpg" alt="algomas malteada"></div>
			</div>
		</div>
	</div>

@stop