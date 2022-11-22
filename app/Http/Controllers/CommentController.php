<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;
use App\Models\Comment;
use App\Models\Movies;

class CommentController extends Controller
{
    public function addCommentMovie(Request $request, Movies $movie){

        
        $comment = new Comment();

        $comment->content = $request->comment1;
        $comment->user_id = auth()->user()->id;
        

        $comment->movie_name = $movie->name;
        $comment->movie_id = $movie->id;
        $movie->comments()->save($comment);

        return('You have left a comment!!');


    }
    public function store(Movies $movie,Request $request){
        
        //dd($request);
       $comment = new Comment();
       //dd($review->Movie);

       $comment-> content= $request->comment1;
       
       $comment->movie_name = $movie->name;
       $comment->movie_id = $movie->id;
       $comment->user_id = auth()->user()->id;
       $comment->save();

       return('You have left a comment!!');

       

    }

    public function destroy($id){
        $comment = Comment::where('id','like',"%$id")->first();
        $comment->delete();

        return('Comment deleted');
        
    }
}
