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
			<a class="navbar-brand icon-a" href="/"></a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a class="{{ Request::is('filosofia') ? 'active' : '' }}" href="filosofia">Filosofía</a></li>
				<li><a class="{{ Request::is('acerca-de') ? 'active' : '' }}" href="acerca-de">Acerca De</a></li>
				<li><a class="{{ Request::is('club-pistones') ? 'active' : '' }}" href="club-pistones">Club Pistones</a></li>
				<li class="hidden-xs" id="home"><a href="/"><img src="images/logo_pistones.svg" alt="logo pistones garage"></a></li>
				<li><a class="{{ Request::is('cocina') ? 'active' : '' }}" href="cocina">Cocina</a></li>
				<li><a class="{{ Request::is('sucursales') ? 'active' : '' }}" href="sucursales">Sucursales</a></li>
				<li><a class="{{ Request::is('franquicia') ? 'active' : '' }}" href="franquicia">Franquicia</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>