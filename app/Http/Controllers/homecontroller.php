<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function grid() {
//        $movie = Movie::all();
        $movie = Movie::inRandomOrder()->get();
        return view('home',compact('movie'));
    }
}
