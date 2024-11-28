<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;

Route::fallback(function () {
    return view('error');
});

Route::get('/', function () {

    return view('home');

});


Route::get('/category', function () {
    return view('category');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/contact',[Admincontroller::class, 'contact']);

Route::get('/register', [Admincontroller::class, 'create']);
Route::post('/insert', [Admincontroller::class, 'insert']);
