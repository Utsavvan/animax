<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class moviecontroller extends Controller
{
    public function movie($name) {

        $movie = \DB::select('SELECT * FROM `movies` WHERE title = ?' , [$name]);
//        $suggestedMovie = Movie::all()->inRandomOrder();
        $suggestedMovie = Movie::inRandomOrder()->get();
        return view('emovie',compact('movie','suggestedMovie'));
//        dd($movie);
    }

    public function search(Request $request)
    {
//        return $request->input('query');
        $data = Movie::where('title','like','%'.$request->input('query').'%')->get();
        return view('search',compact('data'));
    }
}
