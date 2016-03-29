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
</body>
</html>
