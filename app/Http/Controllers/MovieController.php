<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
   function index(Request $query) {
        $data = Movie::find($query->id)->with('episodes')->first();
        return view('detail', compact('data'));      
   }
}
