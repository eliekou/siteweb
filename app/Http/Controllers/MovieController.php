<?php

namespace App\Http\Controllers;
use App\Models\Movies;
use Illuminate\Http\Request;



class MovieController extends Controller
{
    public function show()
    {
        //$movies = DB::all();
        //$movies = DB::select('select name from mytable');;
        $data = [];
        $movies = Movies::all();
        //$data["title"] = $movie['id'];
        //$data["id"] = $movie ->getId();
        $data["movies"] = Movies::all();



        //$data = $movies["results_id"];
        
        return view('co.choice')->with("movies",$movies);
    }

    public function search(){
        $q = request()->input('q');

        
        //Système de moteur de recherche
        $movie = Movies::where('name','like',"%$q%")//pas forcément le q

                ->orWhere('overview','like',"%$q%")
                ->orWhere('title','like',"%$q%")->with('reviews','comments')
                ->paginate(6);
                
        return view('movies.movie1')->with("movie",$movie);        
    }

    public function test(){

        return view('partials.search');
    }
    public function show_reviews($id){

        //Fonction qui vise à montrer les différentes reviews
        //On essaye d'utiliser du eager loading
        $movie = Movies::where('id','like',"%$id")->with('reviews')->get();
        return view('movies.movie1review')->with("movie",$movie);
    }

    public function show_comments($id){
        $movie = Movies::where('id','like',"%$id")->with('comments')->get();
        return view('movies.movie1comments')->with("movie",$movie);
    }




}
