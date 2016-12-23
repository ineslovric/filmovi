<?php

namespace App\Http\Controllers;
use App\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
	{
		$filmovi = Film::orderBy('name', 'asc')->get();
		return view('index', ['films'=>$filmovi]);
	}
}
