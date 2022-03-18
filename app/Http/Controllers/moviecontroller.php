<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class moviecontroller extends Controller
{
    public function movie($name) {

        $movie = \DB::select('SELECT `id`, `banner`, `title`, `quality`, `rating`, `release_date`, `timing`, `language`, `description`, `Category`, `trailer`, `movie`, `poster`, `created_at`, `updated_at` FROM `movies` WHERE title = ?' , [$name]);
//        $suggestedMovie = Movie::all()->inRandomOrder();
        $suggestedMovie = Movie::inRandomOrder()->get();
        return view('emovie',compact('movie','suggestedMovie'));
//        dd($movie);
    }
}
