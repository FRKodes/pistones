@extends('app')

@section('titlePage', 'Menú To Go')

@section('content')
	<div class="container-fluid inner-banner cultura">
		<div class="inner-title menu"><img src="images/menu_to_go.svg" alt="menu to go Pistones Garage"></div>
	</div>

	<div class="container">
		<div class="row">
			<div class="menu-page-top">
				<div class="col-xs-6 col-sm-6 col-md-5 col-md-offset-1"><img src="images/horario_zona_reparto.svg" alt="horario zona reparto Pistones Garage"></div>
				<div class="col-xs-6 col-md-5">
					<a href="/pdf/menu_togo.pdf" target="_blank" title="Ver menú To Go" class="btn btn-primary naranja menu">VER MENÚ</a><br><br>
					<p class="hidden-xs"><strong>HORARIO</strong></p>
					<p>LUNES A DOMINGO DE 1 PM HASTA 11 PM</p>
					<a href="#americas-map" data-map="americas" class="btn btn-primary suc active">AMERICAS</a>
					<a href="#toscana-map" data-map="toscana" class="btn btn-primary suc">TOSCANA</a>
				</div>
			</div>
		</div>
		
		<div id="americas" class="map-container">
			<div class="map-togo" id="map-americas"></div>
		</div>

		<div id="toscana" class="map-container">
			<div class="map-togo" id="map-toscana"></div>
		</div>

	</div>
@stop