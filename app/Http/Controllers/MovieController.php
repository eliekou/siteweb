<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Http::get('https://api.themoviedb.org/3/trending/all/day?api_key=12f3ecaddec2acc46c4f8d540b4c9053');
        return view('movies.choice')->with('movies',$movies);
    }
}
