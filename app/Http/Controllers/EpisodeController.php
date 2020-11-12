<?php

namespace App\Http\Controllers;

use App\Episode;
use App\Movie;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    function index(Request $query) {
        $data = Episode::with(['movie' => function($query) {
            $query->with('genre')->get();
        }])
        ->where("movie_id", "=", $query->id)->paginate(3);
        return view('detail', compact('data')); 
    }

}
