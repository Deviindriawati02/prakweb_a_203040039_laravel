<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
        'title' => 'Home',
        'active' => 'home',
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        'active' => 'about',
        "title"=>"About",
        "name" => "Devi Indriawati",
        "email" => "Deviindriawati02@gmail.com",
        "image" => "dep.jpeg"

    ]);
});

Route::get('/posts',[PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);


Route::get('/categories/', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});
Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);