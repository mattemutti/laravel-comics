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
    $titleNav = config('titleNav.titleNav');
    //dd($titleNav);

    return view('comics.index', compact('comics'));
})->name('comics.index');

Route::get('/show/{id}', function ($id) {

    abort_unless($id >= 0 && $id < count(config('db.comics')), 404);
    $comic = config('db.comics')[$id];

    return view('comics.show', compact('comic'));
})->name('comics.show');