<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.metas')
	@include('partials.styles')
</head>
<body>
	@include('partials.nav')
	
	@yield('content')
	
	<footer>
		@include('partials.footer')
	</footer>
	<script src="{{ elixir('js/all.min.js') }}"></script>
	@include('partials.google')
	@include('partials.facebook')
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAD6Xkq9G_1c8UGlA2noHJuDV5jBEWfC68&signed_in=true&callback=initMap"></script>
</body>
</html>
