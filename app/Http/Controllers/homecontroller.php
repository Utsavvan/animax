<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class homecontroller extends Controller
{
    public function grid() {
//        $movie = Movie::all();
        $movie = Movie::inRandomOrder()->get();

        if(!empty(Auth::user()->email)) {
            $useremail = Auth::user()->email;
            $username = Auth::user()->name;
        }else{
            $useremail = 1;
            $username = 1;
        }
        return view('home',compact('movie','useremail','username'));
    }
}
