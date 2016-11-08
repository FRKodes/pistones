@extends('app')

@section('titlePage', 'Menú To Go')

@section('content')
	<div class="container-fluid inner-banner togo">
		<div class="inner-title menu"><img src="images/menu_to_go.svg" alt="menu to go Pistones Garage"></div>
	</div>

	<div class="container">
		<div class="row">
			<div class="menu-page-top">
				<div class="col-xs-6 col-sm-6 col-md-5 col-md-offset-1"><img src="images/horario_zona_reparto.svg" alt="horario zona reparto Pistones Garage"></div>
				<div class="col-xs-6 col-md-5">
					<a href="/pdf/menu_togo.pdf" target="_blank" title="Ver menú To Go" class="btn btn-primary naranja menu">VER MENÚ</a><br><br>
					<p class="hidden-xs"><strong>HORARIO:</strong></p>
					<p>LUNES A DOMINGO DE 1 PM HASTA 11 PM</p>
					<a href="#americas-map" data-map="americas" class="btn btn-primary suc active">AMERICAS</a>
					<a href="#toscana-map" data-map="toscana" class="btn btn-primary suc">TOSCANA</a>
				</div>
			</div>
		</div>
		
		<div id="americas" class="map-container">
			<p class="col-sm-3 back-white">
				<span class="naranja">Sucursal Américas:</span> <br>
				Tel. (33) 3817-1790 <br>
				Av. Américas 1551-A <br>
				Col. Providencia, C.P. 44630 <br>
			</p>
			<div class="map-togo" id="map-americas"></div>
		</div>

		<div id="toscana" class="map-container">
			<p class="col-sm-3 back-white">
				<span class="naranja">Sucursal Toscana:</span> <br>
				Tel. (33) 31091922  <br>
				Av. Santa Margarita 3849 <br>
				Col. Valle Real <br>
			</p>
			<div class="map-togo" id="map-toscana"></div>
		</div>

	</div>
@stop