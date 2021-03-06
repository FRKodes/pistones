<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/"><img src="images/logo_pistones_stencil.svg" alt="logo pistones stencil"></a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="hidden-xs" id="home"><a href="/"><img src="images/escudo-pistones.svg" alt="logo pistones garage"></a></li>
				<li>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Filosofía<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="filosofia">El Taller</a></li>
						<li><a href="cultura-organizacional">Cultura Organizacional</a></li>
					</ul>
				</li>
				<li><a class="{{ Request::is('acerca-de') ? 'active' : '' }}" href="acerca-de">Acerca De</a></li>
				<li><a class="{{ Request::is('cocina') ? 'active' : '' }}" href="cocina">Cocina</a></li>
				<li><a class="{{ Request::is('sucursales') ? 'active' : '' }}" href="sucursales">Sucursales</a></li>
				<li><a class="{{ Request::is('franquicia') ? 'active' : '' }}" href="franquicia">Franquicia</a></li>
				<li><a class="{{ Request::is('live-score') ? 'active' : '' }}" href="live-score">Marcadores en vivo</a></li>
				{{-- <li><a class="" target="_blank" href="{{ url('quiniela')}}">Quiniela Mundial</a></li> --}}
				{{-- <li><a class="{{ Request::is('menu-to-go') ? 'active' : '' }}" href="menu-to-go">Menú To Go</a></li> --}}
				{{-- <li><a class="{{ Request::is('sportstravel') ? 'active' : '' }}" href="sportstravel">Sports Travel</a></li> --}}
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>