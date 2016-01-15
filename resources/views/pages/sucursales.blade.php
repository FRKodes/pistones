@extends('app')

@section('titlePage', 'Sucursales')

@section('content')
	<div class="container-fluid inner-banner sucursales">
		<div class="inner-title"><img src="images/sucursales.svg" alt="Sucursales Pistones Garage"></div>
	</div>

	<div class="container sucursales">
		<div class="row">
			<div class="col-sm-4">
				<div class="text-container">
					<h2 class="chunk naranja">Guadalajara, Jalisco: Américas</h2>
					<p>
						Tel. (33) 3817-1790 / 3817-1397<br>
						Av. Américas 1551-A (Hotel Fiesta Americana Grand) <br>
						Col. Providencia, C.P. 44630
					</p>
					<figure class="map"><img src="images/mapa-01.png" alt="mapa"></figure>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="product-slider">
					<div class="item"><img src="images/pistones-garage-concepto01.jpg" alt="pistones garage concepto 01"></div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-4">
				<div class="text-container">
					<h2 class="chunk naranja">Zapopan, Jalisco: Toscana</h2>
					<p>
						Tel. (33) 31091922 <br>
						Av. Santa Margarita 3849 (casi esquina con Av. Servidor Público) <br>
						Col. Valle Real
					</p>
					<figure class="map"><img src="images/mapa-01.png" alt="mapa"></figure>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="product-slider">
					<div class="item"><img src="images/pistones-garage-sucursal-toscana.jpg" alt="pistones garage sucursal toscana"></div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-4">
				<div class="text-container">
					<h2 class="chunk naranja">Hermosillo, Sonora: Centro histórico</h2>
					<p>
						Tel. (662) 212-0997 <br>
						Plaza Antigua, Blvd. Rosales 108 <br>
						Local B esq. Monterrey, C.P. 83000
					</p>
					<figure class="map"><img src="images/mapa-01.png" alt="mapa"></figure>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="product-slider">
					<div class="item"><img src="images/pistones-garage-sucursal-centrohistorico.jpg" alt="pistones garage sucursal centro histórico Hermosillo."></div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-4">
				<div class="text-container">
					<h2 class="chunk naranja">Hermosillo, Sonora: Colosio Poniente</h2>
					<p>
						Tel. (662) 264-8687 <br>
						Plaza Cantabria, Local 11 <br>
						Col. La Rioja, C.P. 83240
					</p>
					<figure class="map"><img src="images/mapa-01.png" alt="mapa"></figure>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="product-slider">
					<div class="item"><img src="images/pistones-garage-sucursal-colosio.jpg" alt="pistones garage sucursal colosio"></div>
				</div>
			</div>
		</div>


	</div>	

@stop