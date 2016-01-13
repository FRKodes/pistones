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
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quas quibusdam nesciunt, accusantium ipsam minima eius. A debitis consectetur, dicta tempora. Facilis, eos? Porro eligendi modi numquam a voluptatum officiis.</p>
		</div>
	</div>

	<div class="container">
		<div class="col-sm-4">
			<div class="text-container">
				<h2 class="chunk naranja concepto">CONCEPTO</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus nam fugiat inventore vero quibusdam error et dolores, sequi aliquam reprehenderit possimus odit beatae suscipit facere repudiandae fugit excepturi, fuga obcaecati!
				</p>
			</div>
		</div>
		<div class="col-sm-8">
			<div class="product-slider">
				<div class="item"><img src="images/pistones-garage-concepto01.jpg" alt="pistones garage concepto 01"></div>
			</div>
		</div>
	</div>

	<div class="container space">
		<div class="col-sm-4 pull-right">
			<div class="text-container">
				<figure class="title"><img class="taller_deportes" src="images/taller_de_los_deportes.svg" alt="El taller de los deportes"></figure>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus nam fugiat inventore vero quibusdam error et dolores, sequi aliquam reprehenderit possimus odit beatae suscipit facere repudiandae fugit excepturi, fuga obcaecati!
				</p>
			</div>
		</div>
		<div class="col-sm-8 pull-left">
			<div class="product-slider">
				<div class="item"><img src="images/pistones-garage-deportes-01.jpg" alt="pistones  garage, el taller de los deportes 01.jpg"></div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="col-sm-4">
			<div class="text-container beerday">
				<figure class="title"><img class="" src="images/beerday.svg" alt="tu beerday"></figure>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus nam fugiat inventore vero quibusdam error et dolores, sequi aliquam reprehenderit possimus odit beatae suscipit facere repudiandae fugit excepturi, fuga obcaecati!
				</p>
			</div>
		</div>
		<div class="col-sm-8">
			<div class="product-slider">
				<div class="item"><img src="images/pistones-garage-berrday-01.jpg" alt="pistones garage berrday 01"></div>
			</div>
		</div>
	</div>

@stop