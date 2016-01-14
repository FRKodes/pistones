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
	
	public function sendmail(){
		Mail::send('emails.contacto', [], function($message)
		{
		    $message->to('frkalderon@gmail.com', 'Pistones Garage')->subject('Pistones Franquicia');
		});
	}

}
