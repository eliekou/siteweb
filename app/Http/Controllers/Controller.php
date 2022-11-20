<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Movies;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function start(){

        $movies = Movies::all()->whereNotNull('vote_average')->sortByDesc('vote_average')->take(10);
        //dd($movies);
        return view("HomePage")->with("movies",$movies);
    }


}



