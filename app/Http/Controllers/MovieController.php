<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function index()
    {
        $movies = getContent('/database/save');
        return view('movies.choice')->with('movies',$movies);
    }
}
