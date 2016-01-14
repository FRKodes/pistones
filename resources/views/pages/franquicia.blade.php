@extends('app')

@section('titlePage', '¿Interesado en una franquicia?')

@section('content')
	<div class="container-fluid inner-banner franquicia">
		<div class="inner-title"><img src="images/franquicia.svg" alt="Franquicias Pistones Garage"></div>
	</div>

	<div class="container black relative">
		<div class="col-sm-6">
			<div class="text-container franquicia">
				<h1 class="chunk naranja">FORMA PARTE DE<br>UNA COMUNIDAD<br><span>EXITOSA</span></h1>
			</div>
		</div>
		<div class="col-sm-6">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum nam cumque maxime illo sunt iure ad vel asperiores possimus atque eum repudiandae odio qui expedita non ab, repellendus, corporis rem.
			</p>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt, deserunt nisi recusandae tempora, sed commodi qui veniam quia, ipsum pariatur exercitationem. Nobis architecto illum quaerat voluptatem maiores nostrum consequuntur!
			</p>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum nam cumque maxime illo sunt iure ad vel asperiores possimus atque eum repudiandae odio qui expedita non ab, repellendus, corporis rem.
			</p>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt, deserunt nisi recusandae tempora, sed commodi qui veniam quia, ipsum pariatur exercitationem. Nobis architecto illum quaerat voluptatem maiores nostrum consequuntur!
			</p>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum nam cumque maxime illo sunt iure ad vel asperiores possimus atque eum repudiandae odio qui expedita non ab, repellendus, corporis rem.
			</p>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nesciunt, deserunt nisi recusandae tempora, sed commodi qui veniam quia, ipsum pariatur exercitationem. Nobis architecto illum quaerat voluptatem maiores nostrum consequuntur!
			</p>

		</div>
		<div class="col-sm-6 slider-franquicia">
			<div class="product-slider">
				<div class="item"><img src="images/filosofia-cultura-pistones-01.jpg" alt="filosofia cultura pistones 01"></div>
			</div>
		</div>
	</div>

	<div class="container">
		
		<h2 class="chunk naranja escribenos">ESCRÍBENOS!</h2>
		
		<div class="form">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus voluptatem vel laudantium veritatis saepe cumque, a, quam adipisci facere repellat nulla quae maiores dolores dicta ex quasi ducimus explicabo. Commodi!
			</p>
			{!! Form::open(['url'=>'sendmail', 'id'=>'contactForm']) !!}
				<div class="form-group"> {!! Form::input('text', 'nombre', null, ['class'=>'form-control', 'placeholder'=>'Nombre', 'data-validate'=>'required']) !!} </div>
				<div class="form-group"> {!! Form::input('text', 'email', null, ['class'=>'form-control', 'placeholder'=>'Email', 'data-validate'=>'required|email']) !!} </div>
				<div class="form-group"> {!! Form::input('text', 'telefono', null, ['class'=>'form-control', 'placeholder'=>'Teléfono', 'data-validate'=>'required']) !!} </div>
				<div class="form-group"> {!! Form::textarea('mensaje', null, ['class'=>'form-control', 'placeholder'=>'Mensaje']) !!} </div>
				<div class="form-group"> {!! Form::submit('Enviar', ['class'=>'btn btn-primary chunk']) !!} </div>
				<div class="chunk sent_mail_alert">Gracias!<br>Nos pondremos en contactigo a la brevedad.</div>
			{!! Form::close() !!}
		</div>
	</div>

@stop