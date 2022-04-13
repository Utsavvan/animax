<?php

namespace App\Http\Controllers;

use App\Models\episode;
use App\Models\season;
use App\Models\series;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function add()
    {
        return view('series');
    }
    public function store(Request $request)
    {
        $series = new series();

        $series->name = $request->input('name');

        //banner upload
        $filenameWithExt = $request->file('banner')->getClientOriginalName();// Get Filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);// Get just Extension
        $extension = $request->file('banner')->getClientOriginalExtension();// Filename To store
        $fileNameToStore = $filename. '_'. time().'.'.$extension;// Upload Image
        $request->file('banner')->storeAs('public/image', $fileNameToStore);

        $series->banner = $fileNameToStore;

        //poster upload
        $filenameWithExt = $request->file('poster')->getClientOriginalName();// Get Filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);// Get just Extension
        $extension = $request->file('poster')->getClientOriginalExtension();// Filename To store
        $fileNameToStore = $filename. '_'. time().'.'.$extension;// Upload Image
        $request->file('poster')->storeAs('public/image', $fileNameToStore);

        $series->poster = $fileNameToStore;

        $series->quality = $request->input('quality');
        $series->rating = $request->input('rating');
        $series->release_date = $request->input('release');
        $series->language = $request->input('language');
        $series->description = $request->input('description');
        $series->Category = $request->input('category');
        $series->trailer = $request->input('trailer');

        $series->save();
        return redirect()->route('view.series');
    }

    public function view(){
        $series = DB::select('select * from series');
        return view('viewseries',compact('series'));
    }

    public function delete($sid) {
        DB::delete('delete from series where id = ?',[$sid]);
//        return view('viewseries');
        return redirect()->back();
    }

    public function update($id)
    {
        $series = series::find($id);
        $seriesname = $series->name;
        return view('updateseries',compact('seriesname','series'));
    }
    public function updates(Request $request,$id)
    {
        $series = series::find($id);

        $series->name = $request->input('name');

        //banner upload
        $filenameWithExt = $request->file('banner')->getClientOriginalName();// Get Filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);// Get just Extension
        $extension = $request->file('banner')->getClientOriginalExtension();// Filename To store
        $fileNameToStore = $filename. '_'. time().'.'.$extension;// Upload Image
        $request->file('banner')->storeAs('public/image', $fileNameToStore);

        $series->banner = $fileNameToStore;

        //poster upload
        $filenameWithExt = $request->file('poster')->getClientOriginalName();// Get Filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);// Get just Extension
        $extension = $request->file('poster')->getClientOriginalExtension();// Filename To store
        $fileNameToStore = $filename. '_'. time().'.'.$extension;// Upload Image
        $request->file('poster')->storeAs('public/image', $fileNameToStore);

        $series->poster = $fileNameToStore;

        $series->quality = $request->input('quality');
        $series->rating = $request->input('rating');
        $series->release_date = $request->input('release');
        $series->language = $request->input('language');
        $series->description = $request->input('description');
        $series->Category = $request->input('category');
        $series->trailer = $request->input('trailer');

        $series->save();
        return redirect()->route('view.series');
    }

    public function showse($name)
    {
        $season = Season::whereHas('series',function($q) use($name){
            $q->where('name', '=', $name);
        })->get();

        $episode = episode::whereHas('series',function($q) use($name){
            $q->where('name', '=', $name);
        })->get();

        return view('index',compact('season','name','episode'));
    }

    public function series($name) {

        $series = \DB::select('SELECT * FROM `series` WHERE name = ?' , [$name]);
//        $suggestedMovie = Movie::all()->inRandomOrder();
//        $suggestedMovie = Movie::inRandomOrder()->get();
//        return view('emovie',compact('movie','suggestedMovie'));
//        dd($series);

        $season = Season::whereHas('series',function($q) use($name){
            $q->where('name', '=', $name);
        })->get();

        $episode = episode::whereHas('series',function($q) use($name){
            $q->where('name', '=', $name);
        })->get();

        return view('eseries',compact('series','season','name','episode'));
    }
}
