<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function utama(){
		return view('utama');
	}

	public function profil(){
		return view('profil');
	}

	public function kontak(){
		return view('kontak');
	}	
}
