@extends('app')

@section('titlePage', 'Marcadores en vivo de fútbol.')

@section('content')
	<div class="container-fluid inner-banner franquicia">
		<div class="inner-title">
			{{-- <img src="images/franquicia_new.svg" alt="Franquicias Pistones Garage"> --}}
		</div>
	</div>

	<div class="container relative">
		<div class="col-xs-12 text-center">
			<h1 style="margin-top: 20px;margin-bottom: 40px;">FÚTBOL</h1>
		</div>
		<div class="col-xs-12 col-sm-8 col-sm-offset-2">
			<?php if(strpos($con = ini_get("disable_functions"), "fsockopen") === false) {if(is_resource($fs = fsockopen("www.livescore.in", 80, $errno, $errstr, 3)) && !($stop = $write = !fwrite($fs, "GET /es/free/lsapi HTTP/1.1\r\nHost: www.livescore.in\r\nConnection: Close\r\nlsfid: 620564\r\n\r\n"))) {$content = "";while (!$stop && !feof($fs)) {$line = fgets($fs, 128);($write || $write = $line == "\r\n") && ($content .= $line);}fclose($fs);$c = explode("\n", $content);foreach($c as &$r) {$r = preg_replace("/^[0-9A-Fa-f]+\r/", "", $r);}$content = implode("", $c);} else $content .= $errstr."(".$errno.")<br />\n";} elseif(strpos($con, "file_get_contents") === false && ini_get("allow_url_fopen")) {$content = file_get_contents("http://www.livescore.in/es/free/lsapi", false, stream_context_create(array("http" => array("timeout" => 3, "header" => "lsfid: 620564 "))));} elseif(extension_loaded("curl") && strpos($con, "curl_") === false) {curl_setopt_array($curl = curl_init("http://www.livescore.in/es/free/lsapi"), array(CURLOPT_RETURNTRANSFER => true, CURLOPT_HTTPHEADER => array("lsfid: 620564 ")));$content = curl_exec($curl);curl_close($curl);} else {$content = "La versión PHP del inScore no puede cargarse. Solicite a su proveedor de alojamiento web que habilite la función `file_get_contents`  junto  con la directiva `allow_url_fopen` o la función `fsockopen`.";}echo $content; ?>
		</div>
	</div>

@stop