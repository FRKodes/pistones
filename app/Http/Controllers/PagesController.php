<?php namespace App\Http\Controllers;

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

}
