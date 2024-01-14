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

Route::get('/Dates', function () {
    return view('Dates');
});


Route::get('/programe', function () {
    return view('programe');
});
Route::get('/Guidelines', function () {
    return view('Guidelines');
});
Route::get('/call', function () {
    return view('call');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/social', function () {
    return view('social');
});

