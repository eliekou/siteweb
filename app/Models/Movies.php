<?php

namespace App\Models;

use App\Models\Reviews;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    protected $table = 'mytable';


        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'overview',
        'title',
        'poster_path',
        'scores',
        'avg_score',
        'origin_country0',
        'vote_average',
    ];

    public function getId(){
        return $this->attributes['id'];
    }

    public function getName(){
        if ($this->attributes['name']!=NULL){
            
            return $this->attributes['name'];}
        else{
            return $this->attributes['original_title']; 
        }
    }

    public function getReview(){
        return $this->attributes['overview'];
    }

    public function getPoster(){
        return $this->attributes['poster_path'];
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }
    public function avg_score(){
        return $this->reviews->avg('score');
    }
    public function first_trend(){

    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
