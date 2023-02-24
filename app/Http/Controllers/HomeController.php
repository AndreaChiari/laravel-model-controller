<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $movies = movie::all();

        return view('home', compact('movies'));
    }
}
