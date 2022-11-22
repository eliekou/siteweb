<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Testage des middlewares
Route::get('/foo','\App\Http\Controllers\TestController@foo',)->middleware('auth');



//Test si la fonctionnalité de mail marche

Route::get('/', '\App\Http\Controllers\Controller@start')->name('HOME');
//Route::get('/foo','\App\Http\Controllers\TestController@foo');
//Route::get('/bar','\App\Http\Controllers\TestController@bar');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/co.user','\App\Http\Controllers\Usercontroller@show')->middleware(['auth', 'verified'])->name('co.user');
Route::get('/movies','\App\Http\Controllers\MovieController@show')->name('MOVIES');


Route::get('/test','\App\Http\Controllers\MovieController@test');
Route::get('/search','\App\Http\Controllers\MovieController@search')->name('movies.movie1');
Route::get('/showRev/{id}','\App\Http\Controllers\MovieController@show_reviews');
Route::get('/showCom/{id}','\App\Http\Controllers\MovieController@show_comments');

 //Les routes suivantes ne sont que accesibles que si l'on est connectés, en effet on ne peut laisser de commentaires ou de notes si l'on est pas  connectés

Route::middleware(['auth'])->group(function (){
    Route::POST('/review/store/{movie}','\App\Http\Controllers\ReviewController@addReviewMovie')->name('review.store');
    Route::POST('/comment/store/{movie}','\App\Http\Controllers\CommentController@addCommentMovie')->name('comment.store');
});


//Route::POST('/review/store/{movie}','\App\Http\Controllers\ReviewController@addReviewMovie')->name('review.store')->middleware(['auth','verified']);
//Route::POST('/comment/store/{movie}','\App\Http\Controllers\CommentController@addCommentMovie')->name('comment.store')->middleware(['auth','verified']);

Route::middleware(['admin',])->group(function (){
    
    Route::get('/bartt','\App\Http\Controllers\TestController@bar1',);//Cette route doit respecter la logique de la fonction handle
    Route::get('/comment/delete/{id}','\App\Http\Controllers\CommentController@destroy');
});