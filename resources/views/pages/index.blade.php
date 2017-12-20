@extends('app')

@section('titlePage', 'Inicio')

@section('content')
	<section class="big-background">
		{{-- <div class="burger-love"><img src="images/burger_love.svg" alt="Pistones Garage burger love"></div> --}}
		<a id="bgndVideo" class="player hidden-xs hidden-sm" data-property="{videoURL:'https://www.youtube.com/watch?v=lgatYqr0Kac',containment:'body',autoPlay:true, mute:true, startAt:0, opacity:1}"></a>
	    <div class="pattern hidden-xs hidden-sm hidden-md"></div> 
	</section>

	{{-- <div class="banner-main-confederaciones"><a href="{{ url('sportstravel')}}"></a></div> --}}
	{{-- <div class="banner-main-confederaciones"><div class="burger-love-conf"><img src="images/burger_love.svg" alt="Pistones Garage burger love"></div></div> --}}
	
	<div class="container-fluid">
		<div class="container">
			<div class="col-sm-5">
				<div class="text-container">
					<figure class="title"><img src="images/comida_adictiva.svg" alt="Pistones Garage ¡Cuidado comida adictiva!"></figure>
					<p>Una mezcla de decoración inspirada en el automovilismo, comida estilo americana altamente adictiva, drinks perfectamente calibrados, buen ambiente y un servicio personal y humano, sazonada con los mejores eventos deportivos y una propuesta musical actual y de vanguardia.En PISTONES® el sabor sí importa.</p>
				</div>
			</div>
			<div class="col-sm-7">
				<div class="product-slider">
					<div class="item"><img src="images/cuidado-comida-altamente-adictiva-01.jpg" alt="comida altamente adictiva  pistones food and drink garage 01"></div>
					<div class="item"><img src="images/cuidado-comida-altamente-adictiva-02.jpg" alt="comida altamente adictiva  pistones food and drink garage 02"></div>
					<div class="item"><img src="images/cuidado-comida-altamente-adictiva-03.jpg" alt="comida altamente adictiva  pistones food and drink garage 03"></div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container-fluid metanle-tuuurbo">
		<img src="images/metanle_turbo_new.svg" alt="métanle tuuurbo">
	</div>
	
	<div class="container-fluid">
		<div class="container p-up-down-40px livesports">
			<div class="col-sm-5">
				<div class="text-container">
					<figure class="title"><img class="livesports" src="images/live_sports_new.svg" alt="Pistones Garage Livesports"></figure>
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