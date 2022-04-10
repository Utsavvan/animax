<?php

namespace App\Http\Controllers;

use App\Models\episode;
use App\Models\season;
use App\Models\series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EpisodeController extends Controller
{
    public function add($sname,$sename)
    {
        return view('episode');
    }

    public function store(Request $request,$sname,$sename)
    {
        $episode = new episode;
        $episode->name = $request->input('name');
//        $seriesid = DB::select("SELECT id FROM `series` WHERE name = ?",[$sname]);
//        $seasonid = DB::select("SELECT id FROM `seasons` WHERE name = ?",[$sename]);

        $sida = DB::select('SELECT id FROM `series` where name = ?',[$sname]);
        $sid = $sida[0]->id;
        $seida = DB::select('SELECT id FROM `seasons` where name = ? and series_id = ?;',[$sename,$sid]);
        $seid = $seida[0]->id;

        $episode->series_id = $sid;
        $episode->season_id = $seid;
        $episode->save();
        return redirect()->route('view.episode',['sname' => $sname, 'sename' => $sename]);
    }

    public function view($sname,$sename)
    {
        $sida = DB::select('SELECT id FROM `series` where name = ?',[$sname]);
        $sid = $sida[0]->id;
        $seida = DB::select('SELECT id FROM `seasons` where name = ? and series_id = ?;',[$sename,$sid]);
        $seid = $seida[0]->id;
//        dd($sid);
//        dd($seid);
        $episode = DB::select('select * from episodes where series_id = ? AND season_id = ? ',[$sid,$seid]);

        return view('viewepisode',compact('episode','sname','sename'));
    }
    public function delete($epid) {
        DB::delete('delete from episodes where id = ?',[$epid]);
//        return redirect()->route('view.seasons',$name);
        return redirect()->back();
    }

    public function update($id)
    {
        $episode = episode::find($id);
        $episodename = $episode->name;
        return view('updateepisode',compact('episodename'));
    }
    public function updates(Request $request,$id)
    {
        $episode = episode::find($id);
        $episode->name = $request->input('name');
        $episode->save();
        return redirect()->route('view.series');
    }
}
