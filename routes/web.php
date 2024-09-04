<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//router 1
Route::get('/hello', [WelcomeController::class,'hello']);

//router 2
Route::get('/world', function () {
    return 'World';
   }); 

//router 3
Route::get('/welcome', function () {
    return 'Selamat Datang';
   }); 

//router 4
Route::get('/about', function () {
    return '2241760109 - Naura Haidar';
   }); 

//router user
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

//Praktikum 2

// Route::get('/', [PageController::class,'index']);

// Route::get('/about', [PageController::class,'about']);

// Route::get('/articles/{id}', [PageController::class,'articles']);


Route::get('/', [HomeController::class,'index']);

Route::get('/about', [AboutController::class,'about']);

Route::get('/articles/{id}', [ArticleController::class,'articles']);


Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
   ]);
   Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
   ]);
   

