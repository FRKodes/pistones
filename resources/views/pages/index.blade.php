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
		<a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=8FEh9IbTQyM',containment:'body',autoPlay:true, mute:true, startAt:0, opacity:1}"></a>	    
	    <div class="pattern"></div> 
	</section>
	
	<div class="container-fluid">
		<div class="container">
			<div class="col-sm-5">
				<div class="text-container">
					<figure class="title"><img src="images/cuidado_comida_adictiva_naranja.svg" alt="Pistones Garage ¡Cuidado comida adictiva!"></figure>
					<p>Una mezcla de decoración inspirada en el automovilismo, comida estilo americana altamente adictiva, drinks perfectamente calibrados, buen ambiente y un servicio personal y humano, sazonada con los mejores eventos deportivos y una propuesta musical actual y de vanguardia.En PISTONES® el sabor sí importa.</p>
				</div>
			</div>
			<div class="col-sm-7">
				<div class="product-slider">
					<div class="item"><img src="images/comida-pistones-01.jpg" alt="comida pistones 01"></div>
					<div class="item"><img src="images/comida-pistones-02.jpg" alt="comida pistones 02"></div>
					<div class="item"><img src="images/comida-pistones-03.jpg" alt="comida pistones 03"></div>
					<div class="item"><img src="images/comida-pistones-04.jpg" alt="comida pistones 04"></div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container-fluid metanle-tuuurbo">
		<img src="images/metanle_turbo.svg" alt="métanle tuuurbo">
	</div>
	
	<div class="container-fluid">
		<div class="container p-up-down-40px livesports">
			<div class="col-sm-5">
				<div class="text-container">
					<figure class="title"><img class="livesports" src="images/live_sports.svg" alt="Pistones Garage Livesports"></figure>
					<p>Los deportes tienen su casa en PISTONES® El Taller es un lugar único, divertido, original y 100% mexicano. PISTONES® es el lugar ideal para pasarla bien entre familia y amigos.</p>
				</div>
			</div>
			<div class="col-sm-7">
				<div class="product-slider">
					<div class="item"><img src="images/livesports.jpg" alt="pistones livesports, el mejor ambiente"></div>
				</div>
			</div>
		</div>
	</div>

@stop