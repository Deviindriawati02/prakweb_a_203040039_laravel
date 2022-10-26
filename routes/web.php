<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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

Route::get('/', function () {
    return view('Home',[
        "title"=>"Home"
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title"=>"About",
        "name" => "Devi Indriawati",
        "email" => "Deviindriawati02@gmail.com",
        "image" => "dep.jpeg"

    ]);
});

Route::get('/posts', function () {
    return view ('posts');
});
Route::get('/blog',[PostController::class, 'index'] );
Route::get('posts/{post:slug}', [PostController::class, 'show'] );
    
