<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::view('/about', 'about');
Route::view('/portfolio', 'portfolio');
Route::view('/contact', 'contact');
