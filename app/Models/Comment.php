<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    public function Movie(){

        return $this->belongsTo(Movies::Class); 
    }
    public function user(){
        return $this->belongsTo(User::Class);
    }
    
    public function getId(){
        return $this->attributes['id'];
    }
}
