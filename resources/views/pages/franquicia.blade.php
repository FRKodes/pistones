@extends('app')

@section('titlePage', '¿Interesado en una franquicia?')

@section('content')
	<div class="container-fluid inner-banner franquicia">
		<div class="inner-title"><img src="images/franquicia_new.svg" alt="Franquicias Pistones Garage"></div>
	</div>

	<div class="container black relative">
		<div class="col-sm-6">
			<div class="text-container franquicia">
				<h1 class="chunk naranja">FORMA PARTE DE<br>UNA COMUNIDAD<br><span>EXITOSA</span></h1>
			</div>
		</div>
		<div class="col-sm-6">
			<p>
				En Pistones Food &amp; Drink Garage® se vive una experiencia extraordinaria. Nos hemos esforzado por crear un concepto único, mexicano pero con influencia internacional. Todo pensado para superar las expectativas del mercado. <br><br>
				Desde que llegas a Pistones® te recibe un ambiente divertido, diseñado a detalle para maximizar la experiencia del Taller. Hemos desarrollado un modelo de negocio único y diferenciador, sostenido en 5 pilares fundamentales:
			</p>

			<p>
				• Diseño e imagen. Cada herramienta y elemento visual ha sido pensado para ser memorable. Hasta el más mínimo detalle fue pensado para asegurar la fidelidad del cliente y maximizar el tráfico. <br><br>
				• Productos de alta calidad. Un menú diverso, con deliciosas botanas, hamburguesas artesanales, ensaladas y postres. Todos creados con el toque especial de la casa. La mejor calidad al mejor precio. A Pistones® siempre quieres regresar. <br><br>
				• Información. Un software innovador y a la medida del negocio brinda un extra para el punto de venta y ofrece ventajas al cliente. <br><br>
				• Marketing. Una base rica en diseño y una estrategia de comunicación directa que transmite los valores de la marca y atrae al público mediante un esquema dinámico. Pistones® siempre será notorio. <br><br>
				• Experiencia: Creado para convertir cada visita en una experiencia inolvidable. Pistones® fue diseñado para disfrutarse, para vivirse. <br><br>
			</p>
		</div>
		<div class="col-sm-6 slider-franquicia">
			<div class="product-slider">
				<div class="item"><img src="images/franquicia-pistones-garage.jpg" alt="franquicia pistones garage"></div>
			</div>
		</div>
	</div>

	<div class="container">
		
		<h2 class="chunk naranja escribenos">ESCRÍBENOS!</h2>
		
		<div class="form">
			
			<p class="back_white">El taller queremos escuchar de tí, llena el siguiente formulario si tienes alguna duda y/o comentario acerca de nosotros y en breve nos pondremos en contacto contigo. </p>

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