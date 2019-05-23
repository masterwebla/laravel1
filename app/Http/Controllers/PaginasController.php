<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class PaginasController extends Controller
{

	public function nosotros(){
		$nombre = "Mauricio";
		$edad = 32;
		return view('nosotros',compact('nombre','edad'));
	}

	public function productos(){
		return view('productos');
	}

	public function servicios(){
		return view('servicios');
	}

	public function contacto(){
		return view('contacto');
	}
}