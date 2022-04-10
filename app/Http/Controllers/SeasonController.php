<?php

namespace App\Http\Controllers;

use App\Models\season;
use App\Models\series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeasonController extends Controller
{
    public function add($name)
    {
        return view('seasons');
    }
    public function store(Request $request,$name)
    {
        $season = new season;
        $season->name = $request->input('name');
        $seriesid = DB::select("SELECT id FROM `series` WHERE name = ?",[$name]);
        $sid = $seriesid[0]->id;
        $season->series_id = $sid;
        $season->save();
        return redirect()->route('view.seasons',$name);
    }

    public function view($name)
    {
        //series id by name
        $sida = DB::select('SELECT id FROM `series` where name = ?',[$name]);
        $id = $sida[0]->id;

        //season name by series id
        $season = DB::select('select * from seasons where series_id = ?',[$id]);
        $seriesnamea = DB::select('SELECT series.name FROM `series` INNER JOIN seasons ON series.id=seasons.series_id and series.id = ? LIMIT ?',[$id,1]);

        if(!empty($seriesnamea)){
            $seriesname = $seriesnamea[0]->name;
        }
        else
        {
            $seriesname = "not available";
        }
//        dd($seriesname);
        return view('viewseason',compact('season','seriesname','name'));
    }

    public function delete($seid) {
        DB::delete('delete from seasons where id = ?',[$seid]);
        return redirect()->back();
    }

    public function update($id)
    {
        $season = season::find($id);
        $seasonname = $season->name;
        return view('updateseason',compact('seasonname'));
    }
    public function updates(Request $request,$id)
    {
        $season = season::find($id);
        $season->name = $request->input('name');
        $season->save();
        return redirect()->route('view.series');
    }

}
