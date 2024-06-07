<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the movies.
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function getMovies(){
        $movies = Movie::all();
        return $movies;
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.show', compact('movie'));
    }
}
