<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class GenreController extends Controller
{
    function index() {
        $data = Genre::with('movies')->get();
        return view('home', compact('data')); 
    }

    function getMoviesByGenre(Request $query) {
        $data = Genre::with('movies')
        ->where('name', '=', $query->name)->get();
        return view('genre', compact('data')); 
    }
}
