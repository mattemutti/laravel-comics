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

    $comics = config('db.comics');
    //dd($comics);

    return view('comics.index', compact('comics'));
})->name('comics.index');

Route::get('/show', function () {

    $comics = config('db.comics');

    return view('comics.show', compact('comics'));
})->name('comics.show');