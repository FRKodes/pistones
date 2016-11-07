/*-------------------------------
	VALIDATE.JS
	A barebones jQuery validation plugin
	@author Todd Francis
	@version 1.0.3
-------------------------------*/
;(function(r,d,l){d.fn.validate=function(m){return this.each(function(){var f=d(this);if(l===f.data("validate")){var j=new d.validate(m,f);f.data("validate",j)}})};d.validate=function(m,f){function j(a,b){-1==d.inArray(a,b)&&b.push(a);return b}function p(a){a=a.slice(a.indexOf("[")+1,-1);return-1!==a.indexOf(",")?a.split(","):[a]}function n(a){for(var b=[],c=0;c<a.length;c++){var g=a[c],d=[],h=g.indexOf("[");-1!==h&&(d=d.concat(p(g)),g=g.slice(0,h));b.push({rule:g,args:d})}return b}var h=d.extend(!0,
{debug:!1,autoDetect:!1,visibleOnly:!0,beforeSubmit:function(){},singleError:function(){},overallError:function(){},singleSuccess:function(){},overallSuccess:function(){},regExp:{alpha:/^[a-zA-Z]*$/,numeric:/^[0-9]*$/,alphanumeric:/^[a-zA-Z0-9]*$/,url:/^(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$/,email:/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/}},
m),c=this,q=["checkGroupRequired","checkGroupMin","checkGroupMax"];c.$form=f;c.version="1.0.0";if(f!==l)f.on("submit",function(a){if(!c.validate()||h.debug)a.stopImmediatePropagation(),a.preventDefault()});c.validate=function(a){a="undefined"===typeof a?c.$form:a;var b=!1,e=d();h.beforeSubmit.call(c);c.fieldsToCheck(a).each(function(){var a=d(this);if((h.visibleOnly&&a.is(":visible")||!h.visibleOnly)&&!c.checkField(a))b=!0,e=e.add(a)});b?h.overallError.call(c,a,e):!1===h.overallSuccess.call(c,a)&&
(b=!0);return!b};c.checkField=function(a){var b=a.data("validate")?a.data("validate").split("|"):[];a.val();var e=[];if(h.autoDetect&&a.is('input:not([type="checkbox"], [type="radio"])')&&"text"!=a.attr("type"))switch(e=a.attr("type"),e){case "number":b=j("numeric",b);break;default:b=j(e,b)}b=n(b);e=c.checkValue(a,b);if(e instanceof Object)return h.singleError.call(c,a,e),!1;h.singleSuccess.call(c,a,b);return!0};c.checkValue=function(a,b){if(!b)return!0;b="string"==typeof b?n(b):b;for(var e=[],g=
0;g<b.length;g++){var f=b[g].rule,k="",j=[a].concat(b[g].args.slice());f.indexOf("[");k="check"+f.charAt(0).toUpperCase()+f.slice(1);"checkRequired"==k&&a.is('input[type="checkbox"]')?k="checkRequiredCheckbox":-1!=d.inArray(k,q)&&(f=d('input[type="checkbox"]',a),f.length||(f=d('input[type="radio"]',a)),j=[f].concat(j.slice(1)));c[k]instanceof Function?c[k].apply(c,j)||e.push(b[g]):h.regExp[b[g].rule]?""!==a.val()&&!c.checkRegExp(a,b[g].rule)&&e.push(b[g]):e.push(b[g])}return 0<e.length?e:!0};c.fieldsToCheck=
function(a){a=d("[data-validate]",a===l?c.$form:a);h.autoDetect&&(a=d("input[required]").add(a));return a};c.checkRequired=function(a){return 0<a.val().length?!0:!1};c.checkRequiredCheckbox=function(a){return a.is(":checked")};c.checkGroupRequired=function(a){return a.filter(":checked").length?!0:!1};c.checkGroupMin=function(a,b){return a.filter(":checked").length>=b};c.checkGroupMax=function(a,b){return a.filter(":checked").length<=b};c.checkCustomRegExp=function(a,b,c){if(""===a.val())return!0;
b=RegExp(b,c);return a.val().match(b)?!0:!1};c.checkRegExp=function(a,b){return a.val().match(h.regExp[b])?!0:!1};c.checkMaxLength=function(a,b){return""===a.val()?!0:a.val().length<=b};c.checkMinLength=function(a,b){return""===a.val()?!0:a.val().length>=b};c.checkMax=function(a,b){return""===a.val()?!0:parseFloat(a.val())<=parseFloat(b)};c.checkMin=function(a,b){return""===a.val()?!0:parseFloat(a.val())>=parseFloat(b)}}})(window,jQuery);

/*validator*/
$(function(){	
	var formSettings = {
		singleError : function($field, rules){ 
			$field.closest('.form-group').removeClass('valid').addClass('error');
			$('.alert_fields').fadeIn();
		},
		singleSuccess : function($field, rules){ 
			$field.closest('.form-group').removeClass('error').addClass('valid');
			$('.alert_fields').fadeOut();
		},
		overallSuccess : function(){
			var form    	= $('#contactForm'),
				nombre		= form.find( "input[name='nombre']").val(),
				email		= form.find( "input[name='email']").val(),
				telefono	= form.find( "input[name='telefono']").val(),
				_token		= form.find( "input[name='_token']").val(),
				mensaje		= form.find( "textarea[name='mensaje']").val(),
				action		= form.attr( "action"),
				url			= action;

			var posting = $.post(
				url, { n: nombre, e: email, t:telefono, _token: _token, m: mensaje }
			);
			posting.done(function( data ){
				console.log('email sent! \n' + data );
				$('#contactForm')[0].reset();
				$('.sent_mail_alert').fadeIn().delay(3000).fadeOut();
			});
		},
		overallError : function($form, fields){ /*Do nothing, just show the error fields*/ },
			autoDetect : true, debug : true
		};
	var $validate = $('#contactForm').validate(formSettings).data('validate');
});

$( window ).scroll(function() {
	var scroll = $(window).scrollTop();
	if (scroll > 130) {
		$('.navbar-default').addClass('shadow');
	} else{
		$('.navbar-default').removeClass('shadow');
	};
});


(function($) {
	$(document).ready(function() {
		/* IF YOU WANT TO APPLY SOME BASIC JQUERY TO REMOVE THE VIDEO BACKGROUND ON A SPECIFIC VIEWPORT MANUALLY
		 var is_mobile = false;
		if( $('.player').css('display')=='none') {
			is_mobile = true;       
		}
		if (is_mobile == true) {
			//Conditional script here
			$('.big-background, .small-background-section').addClass('big-background-default-image');
		}else{
			$(".player").mb_YTPlayer(); 
		}
		});
		*/
		/*  IF YOU WANT TO USE DEVICE.JS TO DETECT THE VIEWPORT AND MANIPULATE THE OUTPUT  */

		//Device.js will check if it is Tablet or Mobile - http://matthewhudson.me/projects/device.js/
		if (!device.tablet() && !device.mobile()) {
			$(".player").mb_YTPlayer();
		} else {
			//jQuery will add the default background to the preferred class 
			$('.big-background, .small-background-section').addClass('big-background-default-image');
		}
	});
	$('#toscana').delay(1000).fadeOut();
})(jQuery);

$(document).ready(function(){
	$('.product-slider, .product-slider-2, .product-slider-3').slick({
		'autoplay': true,
		'dots': true
	});


	$('.btn.suc').on('click', function () {
		var button = $(this).attr('data-map');
		console.log(button);
		$('.btn.suc').removeClass('active');
		$(this).addClass('active');
		$('.map-container').fadeOut();
		$('#' + button).fadeIn();
	});
});

function initMap() {
	var map = new google.maps.Map(document.getElementById('map-americas'), {
		zoom: 13,
		center: {lat: 20.702757, lng: -103.376457},
		mapTypeId: google.maps.MapTypeId.TERRAIN
	});

	// Define the LatLng coordinates for the polygon's path.
	var americasCoords = [
		{lat: 20.674914, lng: -103.354715},
		{lat: 20.715421, lng: -103.354452},
		{lat: 20.725899, lng: -103.398798},
		{lat: 20.724797, lng: -103.400588},
		{lat: 20.709865, lng: -103.407097},
		{lat: 20.707227, lng: -103.412323},
		{lat: 20.701675, lng: -103.415495},
		{lat: 20.695434, lng: -103.415319},
		{lat: 20.689287, lng: -103.419633},
		{lat: 20.678800, lng: -103.421740},
		{lat: 20.674342, lng: -103.400297},
		{lat: 20.674914, lng: -103.354715}
	];

	// Construct the polygon.
	var pistonesAmericas = new google.maps.Polygon({
		paths: americasCoords,
		strokeColor: '#FF0000',
		strokeOpacity: 0.8,
		strokeWeight: 2,
		fillColor: '#FF0000',
		fillOpacity: 0.35
	});
	pistonesAmericas.setMap(map);

	var map_toscana = new google.maps.Map(document.getElementById('map-toscana'), {
		zoom: 13,
		center: {lat: 20.729511, lng: -103.431543},
		mapTypeId: google.maps.MapTypeId.TERRAIN
	});

	var toscanaCoords = [
		{lat: 20.738475, lng: -103.403667},
		{lat: 20.709802, lng: -103.406986},
		{lat: 20.707625, lng: -103.412334},
		{lat: 20.701742, lng: -103.415504},
		{lat: 20.698406, lng: -103.416098},
		{lat: 20.695441, lng: -103.415207},
		{lat: 20.690159, lng: -103.415405},
		{lat: 20.689233, lng: -103.419763},
		{lat: 20.678947, lng: -103.421695},
		{lat: 20.682746, lng: -103.439325},
		{lat: 20.692939, lng: -103.452499},
		{lat: 20.702251, lng: -103.460374},
		{lat: 20.731110, lng: -103.451608},
		{lat: 20.738012, lng: -103.484595},
		{lat: 20.761582, lng: -103.485663},
		{lat: 20.764153, lng: -103.447248},
		{lat: 20.769604, lng: -103.446249},
		{lat: 20.738475, lng: -103.403667}
	];

	// Construct the polygon.
	var pistonesToscana = new google.maps.Polygon({
		paths: toscanaCoords,
		strokeColor: '#FF0000',
		strokeOpacity: 0.8,
		strokeWeight: 2,
		fillColor: '#FF0000',
		fillOpacity: 0.35
	});
	pistonesToscana.setMap(map_toscana);
}
