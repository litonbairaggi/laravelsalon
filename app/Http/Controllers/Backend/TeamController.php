<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Team;
use Session;
use DB;

class TeamController extends Controller
{
    //
    public function create(){
        return view('backend.team.create');

    }

    public function store(Request $request){

        $teamobj= new Team;       
        $teamobj->name=$request->name;       
        $teamobj->desigation=$request->desigation;       
        $teamobj->facebook=$request->facebook;       
        $teamobj->linkedin=$request->linkedin;       
        $teamobj->twitter=$request->twitter;           
        $teamobj->instagram=$request->instagram;       
        $teamobj->save();    
        Session::flash('message','Successfully Create');
        return redirect()->back();
    }
    
    public function list(){
        $teams=Team::all();
        return view('backend.team.list',compact('teams'));
    }
    public function edit(){
        return view('backend.team.edit');
    }
    public function delete($id){
        $teamProfile=Team::findOrFail($id);
        $teamProfile->delete();
        return redirect()->back();
        //return view('backend.team.list');
    }
}
