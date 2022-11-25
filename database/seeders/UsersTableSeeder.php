<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Review;
use App\Models\Movies;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use database\factories\UserFactory;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        
        

        $movies = Movies::factory(10)->create();
        
        
        
        
        
           
            
        $movie = Movies::all()->random();

        User::factory(3)->create()->each(function($user)use($movie){
            Comment::factory(10)->create([
                'movie_id'=>$movie->id,
                'movies_id'=>$movie->id,
                'movie_name'=>$movie->name,
                'user_id'=>$user->id
            ]);

            Review::factory(rand(1,3))->create([
                    
                'movies_id'=>$movie->id,
                'movie_name'=>$movie->name,
                'user_id'=>$user->id
            ]);
       
       });

        
        
         
            
            
        
        
    }
}
