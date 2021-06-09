<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    public function index() {
        $movies = Movie::orderBy('vote', 'desc')->get();
        return view('home', compact('movies'));
    }
}
