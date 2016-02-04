@extends('app')

@section('titlePage', 'Acerca de nosotros')

@section('content')

	<div class="container-fluid inner-banner acercade">
		<div class="inner-title"><img src="images/acerca_de.svg" alt="Filosofía Pistones Garage "></div>
	</div>

	<div class="container black">
		<div class="col-sm-12">
			<div class="text-container">
				<h1 class="chunk nuestra">NUESTRA<br><span class="naranja">HISTORIA</span></h1>
			</div>
		</div>
		<div class="col-sm-12">
			<p class="col-md-8 col-md-offset-2 text-center">
				Pistones Food &amp; Drink Garage® nace ante la falta de un lugar extraordinario y divertido a un precio razonable. Inspirado en la historia del automovilismo, Pistones® fue creado para ofrecer experiencias extraordinarias. Un espacio que mezcla historia y actualidad, que reinterpreta un taller mecánico para convertirlo en un lugar de entretenimiento. <br><br>
				En Pistones® el sabor sí importa, por eso hemos creado nuestra propia versión de la clásica cocina americana con un toque especial, perfecto para disfrutarlo en familia o con amigos. Divertida decoración, deliciosa comida, refrescantes bebidas y un excelente servicio. Pistones será el lugar al que siempre quieres regresar.
			</p>
		</div>
	</div>

	<div class="container">
		<div class="col-sm-6 col-md-4">
			<div class="text-container">
				<h2 class="chunk naranja concepto">CONCEPTO</h2>
				<p>
					Porque somos más que un restaurante. <br><br>
					Somos un concepto que se diseñó pensando en la experiencia que vivirán nuestros clientes. En el Taller la cocina funciona como el motor. Nuestros mecánicos han creado platillos especiales, han reinterpretado la cocina americana y la sirven con una actitud amable y amena, siempre pendientes de los clientes. En el lugar el diseño es de gran valor, desde el mobiliario, los materiales y los más íntimos detalles. Y por supuesto, el ambiente. En PISTONES® complementamos la experiencia con extras que nuestros clientes valoran, una propuesta musical actualizada, eventos, deportes y diversión. Aquí todo fue pensado para ser único. <br><br>
					PISTONES® ha sido reconocido por medios especializados, como <a href="http://coolhuntermx.com/pistones-garage-sonora/" title="Ver el artículo en COOL HUNTER MX" target="_blank">COOLHUNTER MX &copy;</a>, que valoran su propuesta de diseño e interiorismo, celebrando la creatividad mexicana y nuestro trabajo para ofrecerle a los clientes un lugar memorable.
				</p>
			</div>
		</div>
		<div class="col-sm-6 col-md-8">
			<div class="product-slider">
				<div class="item"><img src="images/pistones-garage-concepto01.jpg" alt="pistones garage concepto 01"></div>
				<div class="item"><img src="images/pistones-garage-concepto02.jpg" alt="pistones garage concepto 02"></div>
				<div class="item"><img src="images/pistones-garage-concepto03.jpg" alt="pistones garage concepto 03"></div>
				<div class="item"><img src="images/pistones-garage-concepto04.jpg" alt="pistones garage concepto 04"></div>
			</div>
		</div>
	</div>

	<div class="container space deportes">
		<div class="col-sm-6 col-md-4 t-deportes">
			<div class="text-container">
				<figure class="title"><img class="taller_deportes" src="images/taller_de_los_deportes.svg" alt="El taller de los deportes"></figure>
				<p class="sports-p">
					Dentro del Taller los deportes adquieren fuerza y pasión, ofrecemos la mayor oferta deportiva en VIVO. Con sistemas de audio y video de última generación para que en nuestras múltiples pantallas puedas sumergirte en la experiencia de “El Taller de los Deportes”. <br><br>
					Ya sea con amigos ó familia, la experiencia de vivir los deportes en el Taller es sinónimo de diversión. ¿NFL? ¿futbol? ¿UFC? ¡lo que quieras ver!
				</p>
			</div>
		</div>
		<div class="col-sm-6 col-md-8">
			<div class="product-slider-2">
				<div class="item"><img src="images/pistones-garage-deportes-04.jpg" alt="pistones  garage, el taller de los deportes 04"></div>
				<div class="item"><img src="images/pistones-garage-deportes-02.jpg" alt="pistones  garage, el taller de los deportes 02"></div>
				<div class="item"><img src="images/pistones-garage-deportes-01.jpg" alt="pistones  garage, el taller de los deportes 01"></div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="col-sm-6 col-md-4">
			<div class="text-container beerday">
				<figure class="title"><img class="" src="images/beerday.svg" alt="tu beerday"></figure>
				<p>
					¡Pura PISTONES® party! El Taller conoce de fiesta y las excusas sobran cuando de disfrutar se trata, ofrecemos un amplio abanico de posibilidades para los que quieren celebrar, nuestros horarios y las promociones diseñadas especialmente para nuestros clientes son un ejemplo de ello; ya sea tu cumpleaños, una noche de chicas o bien que te encuentras lejos de casa estudiando o trabajando, PISTONES® te espera para pasar un buen rato en compañía de tus amigos en un ambiente inigualable. <br><br>
					Nuestra selección musical perfectamente calibrada y balanceada en cada momento, hace de tu estancia en el Taller, una experiencia llena de adrenalina y diversión digna de compartir y recordar. <br><br>
					¿Se te antoja un shot o una cerveza bien fría mientras pasas un rato increíble? no hay problema el Taller ofrece un amplio surtido de bebidas tanto nacionales como de importación, contamos con una importante gama de cervezas artesanales y drinks para todos los gustos.
				</p>
			</div>
		</div>
		<div class="col-sm-6 col-md-8">
			<div class="product-slider-3">
				<div class="item"><img src="images/pistones-garage-beerday-01.jpg" alt="pistones garage beerday 01"></div>
				<div class="item"><img src="images/pistones-garage-beerday-02.jpg" alt="pistones garage beerday 02"></div>
				<div class="item"><img src="images/pistones-garage-beerday-03.jpg" alt="pistones garage beerday 03"></div>
				<div class="item"><img src="images/pistones-garage-beerday-04.jpg" alt="pistones garage beerday 04"></div>
				<div class="item"><img src="images/pistones-garage-beerday-05.jpg" alt="pistones garage beerday 05"></div>
			</div>
		</div>
	</div>

@stop