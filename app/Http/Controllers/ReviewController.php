<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Movies;
class ReviewController extends Controller
{




    public function __construct()
    {
        $this->middleware('auth');
    }


    public function addReviewMovie(Request $request, Movies $movie){

        
        $review = new Review();

        $review->score = $request->rate;
        $review->user_id = auth()->user()->id;
        

        $review->movie_name = $movie->name;
        $review->movies_id = $movie->id;
        $movie->reviews()->save($review);

        return('You have left a review!!');



    }
    public function store(Movies $movie,Request $request){
        
        //dd($request);
       $review = new Review();
       //dd($review->Movie);

       $review->score = $request->rate;
       
       $review->movie_name = $movie->name;
       $review->movies_id = $movie->id;
       $review->user_id = auth()->user()->id;
       $review->save();

       return('You have left a review!!');

       

    }

    public function destroy($id){
        $review = Review::where('id','like',"%$id")->first();
        $review->delete();

        return('Review deleted');
        
    }
}
