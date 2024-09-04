<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/hello', function () {
 return 'Hello World';
});

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

