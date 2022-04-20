<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class moviecontroller extends Controller
{
    public function movie($name) {

        $movie = \DB::select('SELECT * FROM `movies` WHERE title = ?' , [$name]);
//        $suggestedMovie = Movie::all()->inRandomOrder();
        $suggestedMovie = Movie::inRandomOrder()->get();
        if(!empty(Auth::user()->email)) {
            $useremail = Auth::user()->email;
            $username = Auth::user()->name;
        }else{
            $useremail = 1;
            $username = 1;
        }
        return view('emovie',compact('movie','suggestedMovie','username','useremail'));
//        dd($movie);
    }

    public function search(Request $request)
    {
//        return $request->input('query');
        $data = Movie::where('title','like','%'.$request->input('query').'%')->get();
        return view('search',compact('data'));
    }
}
