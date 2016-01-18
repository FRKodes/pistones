@extends('app')

@section('titlePage', 'Inicio')

@section('content')
	{{-- <div class="container-fluid banner-video">
		<div class="play hidden-sm hidden-md hidden-lg">Play</div>
		<div class="burger-love"><img src="images/burger_love.svg" alt="Pistones Garage burger love"></div>
		<iframe src="https://www.youtube.com/embed/JZu8q5kiCuE?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1&amp;loop=1&amp;enablejsapi=1" frameborder="0" allowfullscreen></iframe>
		<iframe src="https://www.youtube.com/embed/JZu8q5kiCuE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

	</div> --}}

	<section class="big-background">
	    <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=Jrj0Tap8dmc',containment:'body',autoPlay:true, mute:true, startAt:0, opacity:1}"></a>	    
	    <div class="pattern"></div> 
	</section>
	
	<div class="container-fluid">
		<div class="container">
			<div class="col-sm-4">
				<div class="text-container">
					<figure class="title"><img src="images/cuidado_comida_adictiva_naranja.svg" alt="Pistones Garage ¡Cuidado comida adictiva!"></figure>
					<p>
						Cada uno de nuestros platillos nos hace sentir orgullosos. <br><br>
						En Pistones® nuestros clientes se llevan mucho más que una deliciosa burger artesanal, se llevan una experiencia única. Nuestros mecánicos trabajan para calibrar todo a la perfección, seleccionando el mejor pan artesanal, ingredientes frescos y la mejor carne. <br><br>
						Cada platillo es preparado por manos expertas que cuidan cada detalle y agregan el toque especial del Taller.
					</p>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="product-slider">
					<div class="item"><img src="images/comida-pistones-01.png" alt="comida pistones Burger Ferrari."></div>
					<div class="item"><img src="images/comida-pistones-02.png" alt="comida pistones armadora, aros de cebolla, ppas gajo, macho nachos y boneless."></div>
					<div class="item"><img src="images/comida-pistones-03.png" alt="comida pistones 4x4."></div>
					<div class="item"><img src="images/comida-pistones-04.png" alt="comida pistones malteada, chocoholic."></div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container-fluid metanle-tuuurbo">
		<img src="images/metanle_turbo.svg" alt="métanle tuuurbo">
	</div>
	
	<div class="container-fluid">
		<div class="container p-up-down-40px livesports">
			<div class="col-sm-4">
				<div class="text-container">
					<figure class="title"><img class="livesports" src="images/live_sports.svg" alt="Pistones Garage Livesports"></figure>
					<p>Ya sea con amigos ó familia, la experiencia de vivir los deportes en el Taller es sinónimo de diversión. ¿NFL? ¿futbol? ¿UFC? ¡lo que quieras ver!</p>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="product-slider">
					<div class="item"><img src="images/pistones-livesports-01.jpg" alt="pistones livesports, el mejor ambiente"></div>
				</div>
			</div>
		</div>
	</div>

@stop