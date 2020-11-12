<?php

use App\Http\Controllers\GenreController;
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
Route::get('/', 'GenreController@index');
Route::get('/genre/{name}', 'GenreController@getMoviesByGenre')->name('genre');
Route::get('/movie/{id}', 'EpisodeController@index')->name('movie');

