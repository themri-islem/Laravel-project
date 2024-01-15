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

Route::get('/keynotes', function () {
    return view('keynotes');
});

Route::get('/topic', function () {
    return view('topic');
});
Route::get('/technical', function () {
    return view('technical');
});
Route::get('/commit', function () {
    return view('commit');
});
Route::get('/sponsor', function () {
    return view('sponsor');
});

Route::get('/heraklion', function () {
    return view('heraklion');
});
Route::get('/conference', function () {
    return view('conference');
});
Route::get('/venu', function () {
    return view('venu');
});
Route::get('/videos-and-photos', function () {
    return view('vd');
});

Route::get('/contact', function () {
    return view('contact');
});