$( window ).scroll(function() {
	var scroll = $(window).scrollTop();
	if (scroll > 130) {
		$('.navbar-default').addClass('shadow');
	} else{
		$('.navbar-default').removeClass('shadow');
	};
});