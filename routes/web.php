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

// HOME ROUTE
Route::get('/', function () {

  $comics=config('comics');
  
  return view('home', compact('comics'));
})->name('home');

// COMICS ROUTE
Route::get('/comics', function () {

  $comics= config('comics');

  return view('comics', compact('comics'));
})->name('comics');


// SINGULAR COMIC ROUTES-----------------------------

// ACTION COMICS
Route::get('/action-comics', function () {

  $comics = config('comics');

  $action = $comics[0];

  return view('action-comics', compact('action'));
})->name('action-comics');

