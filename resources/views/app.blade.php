<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.metas')
	@include('partials.styles')
</head>
<body>
	@include('partials.nav')
	@include('partials.floating-label')
	@yield('content')
	<footer>
		@include('partials.footer')
	</footer>
	<script src="{{ elixir('js/all.min.js') }}"></script>
	@include('partials.google')
	@include('partials.facebook')
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAD6Xkq9G_1c8UGlA2noHJuDV5jBEWfC68&signed_in=true&callback=initMap"></script>
	<script src="https://www.jscache.com/wejs?wtype=rated&amp;uniq=702&amp;locationId=8533870&amp;lang=es_MX&amp;display_version=2"></script>
	<script src="https://www.jscache.com/wejs?wtype=socialButtonBubbles&amp;uniq=76&amp;locationId=8533870&amp;color=green&amp;size=rect&amp;lang=es_MX&amp;display_version=2"></script>
	<script src="https://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=320&amp;locationId=8533870&amp;lang=es_MX&amp;year=2017&amp;display_version=2"></script>
</body>
</html>
