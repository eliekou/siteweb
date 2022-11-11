<?php

namespace App\Models;
use App\Models\Movies;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    public function Movie(){

        return $this->belongsTo(Movies::Class); 
    }
    public function user(){
        return $this->belongsTo(User::Class);
    }


   
}
