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

Route::get('/', function () {
    return view('comics.index');
})->name('comics.index');

Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');
    $single_comic = $comics[$id];

    return view('comics.show', compact('single_comic'));
})->name('comics.show');

Route::get('characters', function () {
    return view('characters');
})->name('characters');
