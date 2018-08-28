<?php namespace App\Http\Controllers;

use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function index(){
		return View('pages.index');
	}

	public function filosofia(){
		return View('pages.filosofia');
	}
	
	public function cultura(){
		return View('pages.cultura');
	}
	
	public function acercade(){
		return View('pages.acercade');
	}

	public function clubpistones(){
		return View('pages.clubpistones');
	}

	public function cocina(){
		return View('pages.cocina');
	}

	public function sucursales(){
		return View('pages.sucursales');
	}

	public function franquicia(){
		return View('pages.franquicia');
	}

	public function menu()
	{
		// return View('pages.menu');
		return redirect('/');

	}
	
	public function sports_travel()
	{
		return View('pages.sports_travel');
	}
	
	public function livescore()
	{
		return View('pages.livescore');
	}
	
	public function sendmail(){
		Mail::send('emails.contacto', [], function($message)
		{
		    $message->to('hola@pistonesgarage.com', 'Pistones Garage')->bcc('tony@brandtelier.com')->subject('Contacto Pistones Franquicia');
		    // $message->to('frkalderon@gmail.com', 'Pistones Garage')->subject('Contacto Pistones Franquicia');
		});
	}

}
